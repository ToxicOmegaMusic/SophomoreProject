<?php

use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\PatientHomeController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\NewRosterController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::middleware(['App\Http\Middleware\UserMiddleware:5 4 3 2 1'])->group(function () {
    Route::get('/patients', function() { return view('patients'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:1'])->group(function () {
    Route::get('/new-role', [RoleController::class, 'index']);
    
    Route::get('/admin-home', function() { return view('admin-home'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:2 1'])->group(function () {
    Route::get('/approve-user', [ApprovalController::class, 'index']);
    Route::get('/employee-info', [EmployeeInfoController::class, 'index']);

    Route::get('/roster', [RosterController::class, 'index']);
    Route::get('/new-roster', [RosterController::class, 'index']);
    Route::get('/payment', function () { return view('payment'); });
    Route::get('/doctor-appointment', function () { return view('doctor-appointment'); });
    Route::get('/patient-info', function () { return view('patient-info'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:2'])->group(function () {

    Route::get('/supervisor-home', function() { return view('supervisor-home'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:3'])->group(function () {

    Route::get('/doctor-home', function() { return view('doctor-home'); });
    Route::get('/doctor-home/patient', function() { return view('doctor-patient'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:4'])->group(function () {

    Route::get('/caregiver-home', function() { return view('caregiver-home'); });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:5'])->group(function () {

    Route::get('/patient-home', [PatientHomeController::class, 'index']);
});

Route::middleware(['App\Http\Middleware\UserMiddleware:6'])->group(function () {


    Route::get('/family-home', function() { return view('family-home'); });
});
