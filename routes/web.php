<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileValidationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard',  'middleware'=>'auth', 'as'=>'dashboard.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/file-validation', [DashboardController::class, 'fileValidationIndex'])->name('file.validate');
    // Route::get('/audit', [DashboardController::class, 'auditIndex'])->name('audit');

    Route::get('/audit', [AuditController::class, 'index'])->name('audit');

    Route::get('/user-management', [UserController::class, 'index'])->name('user.management');
    Route::get('/user-management/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user-management/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user-management/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    // Route::resource('/user-management', UserController::class, ['as'=>'user']);
});

