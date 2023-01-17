<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\FailedQuestion;
use App\Models\Question;
use Illuminate\Http\Request;

class ValidateFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:validate');
    }

    public function index()
    {
        $audits = Audit::paginate(10);
        return view('dashboard.validateFile.index', ['audits' => $audits]);
    }

    public function validateFile(Audit $audit)
    {
        $audit->validated = true;
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit berhasil divalidasi');
    }

    public function unvalidateFile(Audit $audit)
    {
        $audit->validated = false;
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit telah dihapus validasinya');
    }

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
        $failedQuestions = FailedQuestion::where([['level_id', '=', $audit->level], ['audit_id', '=', $audit->id]])->get();
        $failedQuestionsId = [];
        foreach ($failedQuestions as $failedQuestion){
            $failedQuestionsId = $failedQuestion->question_id;
        }

        //get questions
        $questions = Question::where([['level_id', '=', $audit->level], ['type', '=', 'document']])->get();

        return view('dashboard.audit.file', ['audit' => $audit, 'questions' => $questions, 'failedQuestionsId' => $failedQuestionsId, 'files' => $files]);
    }


    public function viewFile($audit, $file)
    {

        $path = 'files/'.$file;
        return response()->file($path);
    }

}
