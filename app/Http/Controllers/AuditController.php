<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Calculation;
use App\Models\FailedQuestion;
use App\Models\Question;
use App\Models\RiskManagement;
use App\Traits\CalculateAndSort;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AuditController extends Controller
{
    use CalculateAndSort;

    public function __construct()
    {
        $this->middleware('can:use audit');
    }

    public function index()
    {
        $audits = Audit::where('user_id',  Auth::user()->id)->paginate(10);
        return view('dashboard.audit.index', ['audits'=> $audits]);
    }

    public function destroy($id)
    {
        $audit = Audit::find($id);
        // dd($audit->files);
        if ($audit->files){
            foreach ($audit->files as $file){
                $path = 'files/'.$file;
                File::delete($path);
            }
        }
        $calculation = Calculation::where('audit_id', $id)->delete();
        $failedQuestion = FailedQuestion::where('audit_id', $id)->delete();
        $audit->delete();


        return redirect('/dashboard/audit')->with('success', 'Audit berhasil dihapus!');
    }



    public function level1()
    {
        $questions = Question::where('level', 1)->get();
        return view('dashboard.audit.level1', ['questions' => $questions]);
    }

    public function store(Request $request)

    {
        // dd($request);
        // dd($request);
        $audit = Audit::find($request->id);
        //Validation

        if(!$audit){
            $questions = Question::where('level', '1')->where('id', '!=', '9')->get();
        } else {
            $questionLevel = $audit->level + 1;
            $questions = Question::where('level', $questionLevel)->where('id', '!=', '9')->whereIn('risk_management_id', $request->questionIdArr)->get();
        }



        // $rules = [
        //     'filenames' => 'required',
        //     'filenames.*' => 'mimes:doc,pdf,docx'
        // ];
        foreach ($questions as $question){
            $questionArray[] = strtolower(str_replace(' ', '_', $question->risk_management->process_name)).'-'.$question->id;
        }
        foreach ($questionArray as $value){
            $rules[$value] = 'required';
        }
        // dd($rules);
        $validatedData = $request->validate($rules);
        // dd($validatedData);

        //Create new Audit


        if (!$audit){
            $audit = Audit::create([
                'user_id' => Auth::user()->id,
                'progress' => 'ongoing'
            ]);
        }
        $audit->validated = false;


        if ($audit->level == null){
            $level = 1;
        }
        // if($audit->level == null){
        //     $level = 1;
        // }elseif($audit->level < 5){
        //     $level = $audit->level + 1;
        // }else {
        //     $level = $audit->level;
        // }

        //Sort data
        $sortedData = $this->sortData($validatedData, $audit, $level);

        //Raw data insert
        $raw_data_object = (object)[];
        $raw_data_object->{'level_'.$level} = $validatedData;
        $audit->raw_data = $raw_data_object;

        //Store file
        $pathArr = [];
        if($request->hasfile('filenames'))
        {
           foreach($request->file('filenames') as $key => $file)
           {
                $name = $key.'_'.time().random_int(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);
                $pathArr[] = $name;
           }
        }
        $audit->files = $pathArr;


        //Store answer
        // dd($sortedData);
        $create = Calculation::create([
            'penetapan_konteks' => $this->countRightAnswer($sortedData->penetapan_konteks),
            'identifikasi_risiko' => $this->countRightAnswer($sortedData->identifikasi_risiko),
            'analisis_risiko' => $this->countRightAnswer($sortedData->analisis_risiko),
            'perencanaan_manajemen_risiko' => $this->countRightAnswer($sortedData->perencanaan_manajemen_risiko),
            'komunikasi_risiko' => $this->countRightAnswer($sortedData->komunikasi_risiko),
            'mitigasi_risiko' => $this->countRightAnswer($sortedData->mitigasi_risiko),
            'pemantauan_risiko' => $this->countRightAnswer($sortedData->pemantauan_risiko),
            'evaluasi_risiko' => $this->countRightAnswer($sortedData->evaluasi_risiko),
            'level' => $level,
            'audit_id' => $audit->id
            ]) ;

        //Check if audit pass level
        $processCollection = collect($create);
        $filteredProcess = $processCollection->except(['level', 'audit_id', 'created_at', 'updated_at', 'id']);

        if($audit->level < 2){
            $limit = 50;
        }elseif ($audit->level < 5) {
            $limit = 100;
        }else {
            $limit = 100;
            $audit->progress = 'end';
        }

        $passedProcess = $this->passedProcess($audit, $filteredProcess, $limit, $level);

        if (empty($passedProcess[$level])){
            $audit->progress = 'end';
        } else {
            $audit->progress = 'ongoing';
            ++$audit->level ;
        }
        $audit->passed_process = $passedProcess;
        $audit->save();


        return redirect('/dashboard/audit/')->with('success', 'Audit berhasil dibuat, silahkan menunggu validasi untuk melanjutkan.');
    }

    public function level2(Audit $audit)
    {
        $passedProcessArr = $audit->passed_process;
        $passedLevelProcess = $passedProcessArr[1];
        foreach ($passedLevelProcess as $process){
            $formattedProcess = ucwords(str_replace('_', ' ', $process));
            $processId = RiskManagement::where('process_name', $formattedProcess)->pluck('id');
            $formattedArr[] = $processId[0];
        }

        $questions = Question::where('level', 2)->whereIn('risk_management_id', $formattedArr)->get();


        return view('dashboard.audit.level2', ['questions' => $questions, 'audit' => $audit, 'process_id' => $formattedArr]);
    }

    public function level3(Audit $audit)
    {
        $passedProcessArr = $audit->passed_process;
        $passedLevelProcess = $passedProcessArr[2];
        foreach ($passedLevelProcess as $process){
            $formattedProcess = ucwords(str_replace('_', ' ', $process));
            $processId = RiskManagement::where('process_name', $formattedProcess)->pluck('id');
            $formattedArr[] = $processId[0];
        }

        $questions = Question::where('level', 3)->whereIn('risk_management_id', $formattedArr)->get();


        return view('dashboard.audit.level3', ['questions' => $questions, 'audit' => $audit, 'process_id' => $formattedArr]);
    }

    public function level4(Audit $audit)
    {
        $passedProcessArr = $audit->passed_process;
        $passedLevelProcess = $passedProcessArr[3];
        foreach ($passedLevelProcess as $process){
            $formattedProcess = ucwords(str_replace('_', ' ', $process));
            $processId = RiskManagement::where('process_name', $formattedProcess)->pluck('id');
            $formattedArr[] = $processId[0];
        }

        $questions = Question::where('level', 4)->whereIn('risk_management_id', $formattedArr)->get();


        return view('dashboard.audit.level4', ['questions' => $questions, 'audit' => $audit, 'process_id' => $formattedArr]);


        return view('dashboard.audit.level4', ['questions' => $questions]);
    }

    public function level5(Audit $audit)
    {
        $passedProcessArr = $audit->passed_process;
        $passedLevelProcess = $passedProcessArr[4];
        foreach ($passedLevelProcess as $process){
            $formattedProcess = ucwords(str_replace('_', ' ', $process));
            $processId = RiskManagement::where('process_name', $formattedProcess)->pluck('id');
            $formattedArr[] = $processId[0];
        }

        $questions = Question::where('level', 5)->whereIn('risk_management_id', $formattedArr)->get();


        return view('dashboard.audit.level5', ['questions' => $questions, 'audit' => $audit, 'process_id' => $formattedArr]);
    }

    // public function passedProcess( $audit, object $process, int $limit , int $level)
    // {
    //     $currentPassedProcess = $audit->passed_process;
    //     $baseProcess = [];
    //     $passedProcess = [];
    //     foreach ($process as $key=>$value){
    //         if (empty($currentPassedProcess)){
    //             $baseProcess[] = $key;
    //         }
    //         if ($value >= $limit){
    //             $passedProcess[] = $key;
    //         }
    //     }

    //     if (!empty($baseProcess)){
    //         $currentPassedProcess[0] = $baseProcess;
    //     }

    //     $currentPassedProcess[$level] = $passedProcess;
    //     $prevLevel = $level - 1;
    //     $prevArr = $currentPassedProcess[$prevLevel];

    //     foreach ($currentPassedProcess[$level] as $currItem) {
    //         $key = array_search($currItem, $prevArr);
    //         if ($currItem = $prevArr[$key]){
    //             unset($prevArr[$key]);

    //         }
    //     }
    //     $newArr = array_values($prevArr);
    //     $currentPassedProcess[$prevLevel] = $newArr;

    //     return $currentPassedProcess;
    // }

    // public function sortData(array $validatedData, object $audit, int $level)
    // {
    //     //Sorting Data
    //     $sortedData = (object)[];
    //     $processCategory = RiskManagement::all()->pluck('process_name');
    //     foreach ($processCategory as $process) {
    //         $formattedProcess = strtolower(str_replace(' ', '_', $process));
    //         $sortedData->$formattedProcess = (object)[];
    //     }
    //     foreach ($validatedData as $key=>$value){
    //         list($risk_management, $questionId) = explode('-', $key);

    //         if(!isset($sortedData->$risk_management)){
    //             $sortedData->$risk_management = (object)[];
    //         }

    //         if($value == 'false'){
    //             FailedQuestion::create([
    //                 'question_id' => $questionId,
    //                 'audit_id' => $audit->id,
    //                 'level' => $level,

    //             ]);
    //         }

    //         $sortedData->$risk_management->$questionId = $value;
    //     }
    //     return $sortedData;
    // }

    // public function countRightAnswer(object $object )
    // {
    //     // dd(get_object_vars($object) != null);
    //     if (get_object_vars($object) != null){
    //         $toPercent = 100;
    //         $rightAnswer = count(array_keys(get_object_vars($object), 'true')) ;
    //         $totalQuestion = count(get_object_vars($object));

    //         $result =  ($rightAnswer / $totalQuestion) * $toPercent;
    //     } else {
    //         $result = 0;
    //     }
    //     return $result;
    // }

    public function output(Audit $audit)
    {
        if($audit->validated != true){
            $audit->level = $audit->level - 1;
        }

        $calculations = Calculation::where('audit_id', $audit->id)->get();

        foreach ($calculations as $calculation){
            $array['Penetapan Konteks'] = $calculation->penetapan_konteks;
            $array['Identifikasi Risiko'] = $calculation->identifikasi_risiko;
            $array['Analisis Risiko'] = $calculation->analisis_risiko;
            $array['Perencanaan Manajemen Risiko'] = $calculation->perencanaan_manajemen_risiko;
            $array['Komunikasi Risiko'] = $calculation->komunikasi_risiko;
            $array['Mitigasi Risiko'] = $calculation->mitigasi_risiko;
            $array['Pemantauan Risiko'] = $calculation->pemantauan_risiko;
            $array['Evaluasi Risiko'] = $calculation->evaluasi_risiko;

            $calculationArray[$calculation->level] = $array;
        }

        $failedQuestions = FailedQuestion::where('audit_id', $audit->id)->get();
        $risk_managements = RiskManagement::all()->except(9);
        // $outputs = Audit::find($id);
        // dd($audit->level);
        return view('dashboard.audit.output', [
            'audit' => $audit,
            'risk_managements' => $risk_managements,
            'failedQuestions' => $failedQuestions,
            'calculations' => $calculationArray
        ]);
    }

}
