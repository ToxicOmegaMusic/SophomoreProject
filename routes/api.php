<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
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

Route::apiResource('new-role', RoleController::class);
Route::resource('register', RegisterController::class);
Route::resource('login', LoginController::class);
Route::resource('employee-info', EmployeeInfoController::class);
Route::resource('approval', ApprovalController::class);
