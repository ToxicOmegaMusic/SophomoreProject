<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\NewRosterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('new-role', RoleController::class);
Route::resource('register', RegisterController::class);
Route::resource('login', LoginController::class);
Route::resource('employee-info', EmployeeInfoController::class);
Route::resource('approval', ApprovalController::class);
Route::resource('roster', RosterController::class);
Route::resource('new-roster', NewRosterController::class);
Route::resource('doctor-appointment', AppointmentController::class);
