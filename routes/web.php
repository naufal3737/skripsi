<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileValidationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidateFileController;
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
    Route::get('/audit/level-1', [AuditController::class, 'level1'])->name('audit.level1');
    Route::post('/audit/level-1/store', [AuditController::class, 'storeLevel1'])->name('audit.level1.store');
    Route::get('/audit/level-2', [AuditController::class, 'level2'])->name('audit.level2');
    Route::post('/audit/level-2/store', [AuditController::class, 'storeLevel2'])->name('audit.level2.store');
    Route::get('/audit/level-3', [AuditController::class, 'level3'])->name('audit.level3');
    Route::post('/audit/level-3/store', [AuditController::class, 'storeLevel3'])->name('audit.level3.store');
    Route::get('/audit/level-4', [AuditController::class, 'level4'])->name('audit.level4');
    Route::post('/audit/level-4/store', [AuditController::class, 'storeLevel4'])->name('audit.level4.store');
    Route::get('/audit/level-5', [AuditController::class, 'level5'])->name('audit.level5');
    Route::post('/audit/level-5/store', [AuditController::class, 'storeLevel5'])->name('audit.level5.store');
    Route::delete('/audit/{audit}', [AuditController::class, 'destroy'])->name('audit.destroy');

    Route::get('/user-management', [UserController::class, 'index'])->name('user.management');
    Route::get('/user-management/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user-management/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user-management/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    // Route::resource('/user-management', UserController::class, ['as'=>'user']);

    Route::get('/validate-file', [ValidateFileController::class, 'index'])->name('validate');
    Route::post('/validate-file/validateFile/{audit}', [ValidateFileController::class, 'validateFile'])->name('validate.validateFile');
    Route::post('/validate-file/unvalidateFile/{audit}', [ValidateFileController::class, 'unvalidateFile'])->name('validate.unvalidateFile');
});

