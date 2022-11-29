<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:use audit');
    }

    public function index()
    {
        return view('dashboard.audit');
    }

    public function calculation()
    {

    }
}
