<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Calculation;
use App\Models\FailedQuestion;
use App\Models\Question;
use App\Models\RiskManagement;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AuditController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:use audit')->except('viewFile');
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
        $questions = Question::where('level_id', 1)->get();
        return view('dashboard.audit.level1', ['questions' => $questions]);
    }

    public function storeLevel1(Request $request)

    {
        //Validation
        $questions = Question::where('level_id', '1')->where('id', '!=', '9')->get();

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
        $validatedData = $request->validate($rules);


        //Create new Audit
        //$level = $request->level;
        $level = 1;
        $audit = Audit::create([
            'user_id' => Auth::user()->id
        ]);


        //Sort data
        $sortedData = $this->sortData($validatedData, $audit, $level);


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
        $create = Calculation::create([
            'penetapan_konteks' => $this->countRightAnswer($sortedData->penetapan_konteks),
            'identifikasi_risiko' => $this->countRightAnswer($sortedData->identifikasi_risiko),
            'analisis_risiko' => $this->countRightAnswer($sortedData->analisis_risiko),
            'perencanaan_manajemen_risiko' => $this->countRightAnswer($sortedData->perencanaan_manajemen_risiko),
            'komunikasi_risiko' => $this->countRightAnswer($sortedData->komunikasi_risiko),
            'mitigasi_risiko' => $this->countRightAnswer($sortedData->mitigasi_risiko),
            'pemantauan_risiko' => $this->countRightAnswer($sortedData->pemantauan_risiko),
            'evaluasi_risiko' => $this->countRightAnswer($sortedData->evaluasi_risiko),
            'level_id' => $level,
            'audit_id' => $audit->id
            ]) ;

        //Check if audit pass level
        $processCollection = collect($create);
        $filteredProcess = $processCollection->except(['level_id', 'audit_id', 'created_at', 'updated_at', 'id']);

        $limit = 50;
        $passedProcess = $this->passedProcess($audit, $filteredProcess, $limit, $level);

        if (empty($passedProcess[$level])){
            $audit->progress = 'end';
            $audit->level = 0;
        } else {
            $audit->progress = 'ongoing';
            $audit->level = 1;
        }
        $audit->passed_process = $passedProcess;
        $audit->save();


        return redirect('/dashboard/audit/')->with('success', 'Audit berhasil dibuat, silahkan menunggu validasi untuk melanjutkan.');
    }

    public function level2()
    {

        $questions = Question::where('level_id', 2)->get();
        return view('dashboard.audit.level2', ['questions' => $questions]);
    }

    public function level3()
    {
        return view('dashboard.audit.level3');
    }

    public function level4()
    {
        return view('dashboard.audit.level4');
    }

    public function level5()
    {
        return view('dashboard.audit.level5');
    }

    public function passedProcess( $audit, object $process, int $limit , int $level)
    {
        $currentPassedProcess = $audit->passed_process;
        $baseProcess = [];
        $passedProcess = [];
        foreach ($process as $key=>$value){
            if (empty($currentPassedProcess)){
                $baseProcess[] = $key;
            }
            if ($value >= $limit){
                $passedProcess[] = $key;
            }
        }

        if (!empty($baseProcess)){
            $currentPassedProcess[0] = $baseProcess;
        }

        $currentPassedProcess[$level] = $passedProcess;
        $prevLevel = $level - 1;
        $prevArr = $currentPassedProcess[$prevLevel];

        foreach ($currentPassedProcess[$level] as $currItem) {
            $key = array_search($currItem, $prevArr);
            if ($currItem = $prevArr[$key]){
                unset($prevArr[$key]);

            }
        }
        $newArr = array_values($prevArr);
        $currentPassedProcess[$prevLevel] = $newArr;

        return $currentPassedProcess;
    }

    public function sortData(array $validatedData, object $audit, int $level)
    {
        //Sorting Data
        $sortedData = (object)[];
        foreach ($validatedData as $key=>$value){
            list($risk_management, $questionId) = explode('-', $key);

            if(!isset($sortedData->$risk_management)){
                $sortedData->$risk_management = (object)[];
            }

            if($value == 'false'){
                FailedQuestion::create([
                    'question_id' => $questionId,
                    'audit_id' => $audit->id,
                    'level_id' => $level,

                ]);
            }

            $sortedData->$risk_management->$questionId = $value;
        }
        return $sortedData;
    }

    public function countRightAnswer(object $object )
    {
        $toPercent = 100;
        $rightAnswer = count(array_keys(get_object_vars($object), 'true')) ;
        $totalQuestion = count(get_object_vars($object));

        $result =  ($rightAnswer / $totalQuestion) * $toPercent;
        return $result;
    }

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

            $calculationArray[$calculation->level_id] = $array;
        }

        $failedQuestions = FailedQuestion::where('audit_id', $audit->id)->get();
        $risk_managements = RiskManagement::all()->except(9);
        // $outputs = Audit::find($id);
        return view('dashboard.audit.output', [
            'audit' => $audit,
            'risk_managements' => $risk_managements,
            'failedQuestions' => $failedQuestions,
            'calculations' => $calculationArray
        ]);
    }

}
