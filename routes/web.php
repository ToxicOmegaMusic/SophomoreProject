<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\PatientHomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\NewRosterController;
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
### FUNCTIONALITY DONE ###
###### STYLING DONE ######
Route::get('/', function () {
    return view('welcome');
});
### FUNCTIONALITY DONE ###
###### STYLING DONE ######
Route::get('/login', function () {
    return view('login');
});
### FUNCTIONALITY DONE ###
###### STYLING DONE ######
Route::get('/register', function () {
    return view('register');
});


/* --- ARH
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
    Route::get('/new-roster', [NewRosterController::class, 'index']);
    Route::get('/payment', function () { return view('payment'); });
    Route::get('/doctor-appointment', [AppointmentController::class, 'index']);
    Route::get('/patient-info', [PatientController::class, 'index']);
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

ARH  --- */

/* --- This is stuff I will delete later. ARH --- */
Route::get('/admin-home', function() { return view('admin-home'); });

Route::get('/approve-user', function() { return view('approve-user'); });

Route::get('/caregiver-home', function() { return view('caregiver-home'); });

Route::get('/doctor-appointment', function() { return view('doctor-appointment'); });

Route::get('/doctor-patient', function() { return view('doctor-patient'); });

Route::get('/employee-info', function() { return view('employee-info'); });

Route::get('/family-home', function() { return view('family-home'); });

Route::get('/new-role', function() { return view('new-role'); });

Route::get('/new-roster', function() { return view('new-roster'); });

Route::get('/newPatientAttributes', function() { return view('newPatientAttributes'); });

Route::get('/patient-info', function() { return view('patient-info'); });

Route::get('/payment', function() { return view('payment'); });

Route::get('/roster', function() { return view('roster'); });