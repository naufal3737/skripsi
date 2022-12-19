<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Calculation;
use App\Models\FailedQuestion;
use App\Models\Question;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuditController extends Controller
{
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
        $audit->delete();

        $calculation = Calculation::where('audit_id', $id)->delete;
        $failedQuestion = FailedQuestion::where('audit_id', $id)->delete;

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
        $questions = Question::where('level_id', 1)->get();
        foreach ($questions as  $question){
            $questionArray[] = strtolower(str_replace(' ', '_', $question->risk_management->process_name)).'-'.$question->id;
        }
        foreach ($questionArray as $value){
            $rules[$value] = 'required';
        }
        $validatedData = $request->validate($rules);
        //End Validation

        //Create new Audit
        $audit = Audit::create([
            'user_id' => Auth::user()->id
        ]);
        //

        //Sort data
        $sortedData = $this->sortData($validatedData, $audit);
        //

        //Check if audit pass level

        //

        //Store counted answer
        $create = Calculation::create([
            'penetapan_konteks' => $this->countRightAnswer($sortedData->penetapan_konteks),
            'identifikasi_risiko' => $this->countRightAnswer($sortedData->identifikasi_risiko),
            'analisis_risiko' => $this->countRightAnswer($sortedData->analisis_risiko),
            'perencanaan_manajemen_risiko' => $this->countRightAnswer($sortedData->perencanaan_manajemen_risiko),
            'komunikasi_risiko' => $this->countRightAnswer($sortedData->komunikasi_risiko),
            'mitigasi_risiko' => $this->countRightAnswer($sortedData->mitigasi_risiko),
            'pemantauan_risiko' => $this->countRightAnswer($sortedData->pemantauan_risiko),
            'evaluasi_risiko' => $this->countRightAnswer($sortedData->evaluasi_risiko),
            'level_id' => 1,
            'audit_id' => $audit->id
        ]) ;



        return redirect('/dashboard/audit')->with('success', 'Audit baru berhasil dibuat! Silahkan menunggu validasi dari auditor.');
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

    public function calculation()
    {

    }

    public function sortData(array $validatedData, object $audit)
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
                    'level_id' => 1
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

    public function output($id)
    {
        $outputs = Audit::find($id);
        return view('dashboard.audit.output');
    }
}
