<?php

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

Route::get('/tail', function() {
    return view('tailwind');
});

Route::middleware(['App\Http\Middleware\UserMiddleware:3'])->group(function () {
    Route::get('/doctor-home', function() {
        return view('doctor-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:4'])->group(function () {
    Route::get('/caregiver-home', function() {
        return view('caregiver-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:5'])->group(function () {
    Route::get('/patient-home', function() {
        $data = DB::table('doctor_appointments')->get()->toArray();
        return view('patient-home')->with('data', $data);
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:6'])->group(function () {
    Route::get('/family-home', function() {
        return view('family-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:1'])->group(function () {
    Route::get('/admin-home', function() {
        return view('admin-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:2'])->group(function () {
    Route::get('/supervisor-home', function() {
        return view('supervisor-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:5 4 3 2 1'])->group(function () {
    Route::get('/patients', function() {
        return view('patients');
    });
});

Route::get('/new-role', function () {
    return view('new-role');
});

Route::get('/approve-user', function () {
    return view('approve-user');
});