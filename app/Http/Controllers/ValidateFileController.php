<?php

namespace App\Http\Controllers;

use App\Models\Audit;
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
        $audit->validated = 'true';
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit berhasil divalidasi');
    }

    public function unvalidateFile(Audit $audit)
    {
        $audit->validated = 'false';
        $audit->save();

        return redirect('/dashboard/validate-file')->with('success', 'Audit telah dihapus validasinya');
    }
}
