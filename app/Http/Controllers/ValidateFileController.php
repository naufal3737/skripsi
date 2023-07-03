<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Calculation;
use App\Models\FailedQuestion;
use App\Models\Question;
use App\Traits\Calculate;
use App\Traits\SortData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ValidateFileController extends Controller
{
    use Calculate, SortData;

    public function __construct()
    {
        $this->middleware('can:validate');
    }

    public function index()
    {
        $audits = Audit::paginate(10);
        return view('dashboard.validateFile.index', ['audits' => $audits]);
    }

    public function validateAudit(Audit $audit)
    {
        $audit->validated = true;
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit berhasil divalidasi');
    }

    public function unvalidateAudit(Audit $audit)
    {
        $audit->validated = false;
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit telah dihapus validasinya');
    }

    public function validateFile($audit_id, $question_id)
    {
        // $raw_data_object = $audit->raw_data;
        // $raw_data = $raw_data_object->{'level_'.$audit->level};
        $audit = Audit::find($audit_id);
        $raw_data = $audit->raw_data->{'level_'.$audit->level};
        $new_raw_data = (object)[];

        foreach ($raw_data as $key => $value){
            list($process_name, $current_question_id) = explode('-', $key);
            if($current_question_id == $question_id ) {
                if ($value == 'false') {
                    $value = 'true';
                } else {
                    $value = 'false';
                }
            }
            $new_raw_data->{$process_name.'-'.$current_question_id} = $value;
        }

        $new_raw_object = (object)[];
        $new_raw_object->{'level_'.$audit->level} = $new_raw_data;

        // foreach ($audit->raw_data->{'level_'.$audit->level} as $old_key => $old_value){
        //     foreach ($new_raw_data as $new_key => $new_value){
        //         if ($old_key == $new_key){
        //             if ($old_value != $new_value){
        //                 $old_value = $new_value;
        //             }
        //         }
        //     }
        // }

        $audit->raw_data = $new_raw_object;
        // dd($audit->raw_data);

        $calculations = Calculation::where('audit_id',  $audit_id)->latest('id')->first();

        //Sort data
        $level = $audit->level;
        $sortedData = $this->sortData($new_raw_data, $audit, $level);
        // dd($this->countRightAnswer($sortedData->mitigasi_risiko));
        
        //Update calculation
        $calculations->penetapan_konteks = $this->countRightAnswer($sortedData->penetapan_konteks);
        $calculations->identifikasi_risiko = $this->countRightAnswer($sortedData->identifikasi_risiko);
        $calculations->analisis_risiko = $this->countRightAnswer($sortedData->analisis_risiko);
        $calculations->perencanaan_manajemen_risiko = $this->countRightAnswer($sortedData->perencanaan_manajemen_risiko);
        $calculations->komunikasi_risiko = $this->countRightAnswer($sortedData->komunikasi_risiko);
        $calculations->mitigasi_risiko = $this->countRightAnswer($sortedData->mitigasi_risiko);
        $calculations->pemantauan_risiko = $this->countRightAnswer($sortedData->pemantauan_risiko);
        $calculations->evaluasi_risiko = $this->countRightAnswer($sortedData->evaluasi_risiko);
        $calculations->save();
        //Check if audit pass level
        $processCollection = collect($calculations);
        $filteredProcess = $processCollection->except(['level', 'audit_id', 'created_at', 'updated_at', 'id']);

        if($audit->level < 2){
            $limit = 50;
        }elseif ($audit->level < 5) {
            $limit = 100;
        }else {
            $limit = 100;
            $audit->progress = 'end';
        }

        $passedProcess = $this->sameLevelPassedProcess($audit, $filteredProcess, $limit, $level);

        if (empty($passedProcess[$level])){
            $audit->progress = 'end';
        } else {
            $audit->progress = 'ongoing';
        }
        $audit->passed_process = $passedProcess;
        $audit->save();


        return redirect()->back()->with('message', 'Audit berhasil divalidasi');
    }

    // public function unvalidateFile(Audit $audit)
    // {
    //     $audit->validated = false;
    //     $audit->save();

    //     return redirect('/dashboard/validate-file')->with('success', 'Audit telah dihapus validasinya');
    // }

    public function showFile(Audit $audit)
    {
        //sort file data
        $fileArr = $audit->files;
        $files = [];
        foreach($fileArr as $value){
            list($questionId, $fileName) = explode('_', $value);
            $files[$questionId] = $value;
        }

        //get failed questions
        $failedQuestions = FailedQuestion::where([['level', '=', $audit->level], ['audit_id', '=', $audit->id]])->get();
        foreach ($failedQuestions as $failedQuestion){
            $failedQuestionsId[] = $failedQuestion->question_id;
        }

        // dd(isset($failedQuestionsId));
        if (!isset($failedQuestionsId)){
            $failedQuestionsId = null;
        }
        //get questions
        $questions = Question::where([['level', '=', $audit->level], ['type', '=', 'document']])->get();
        // dd($failedQuestionsId);

        return view('dashboard.audit.file', ['audit' => $audit, 'questions' => $questions, 'failedQuestionsId' => $failedQuestionsId, 'files' => $files]);
    }
    
    public function destroy($id)
    {
        $audit = Audit::find($id);
        if ($audit->files != null){
            foreach ($audit->files as $file){
                $path = 'files/'.$file;
                File::delete($path);
            }
        }
        $calculation = Calculation::where('audit_id', $id)->delete();
        $failedQuestion = FailedQuestion::where('audit_id', $id)->delete();
        $audit->delete();


        return redirect('/dashboard/validate-file')->with('success', 'Audit berhasil dihapus!');
    }

    public function viewFile($audit, $file)
    {

        $path = 'files/'.$file;
        return response()->file($path);
    }

}
