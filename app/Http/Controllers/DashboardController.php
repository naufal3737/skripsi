<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:use audit')->only('auditIndex');
        $this->middleware('can:validate')->only('fileValidationIndex');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function fileValidationIndex()
    {
        // $this->authorize('validate');

        return view('dashboard.fileValidation');
    }

    public function auditIndex()
    {
        // $this->authorize('use audit');

        return view('dashboard.audit');
    }
    // public function userManagementIndex()
    // {
    //     $users = User::all()->except(Auth::id());

    //     return view('dashboard.userManagement', ['users'=>$users]);
    // }
}
