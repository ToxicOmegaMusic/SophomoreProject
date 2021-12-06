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

Route::middleware(['App\Http\Middleware\UserMiddleware:doctor'])->group(function () {
    Route::get('/doctor-home', function() {
        return view('doctor-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:caregiver'])->group(function () {
    Route::get('/caregiver-home', function() {
        return view('caregiver-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:patient'])->group(function () {
    // this is for patient home, its above the middleware for testing.
    Route::get('/patient-home', function() {
        $data = DB::table('doctor_appointments')->get()->toArray();
        return view('patient-home')->with('data', $data);
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:family'])->group(function () {
    Route::get('/family-home', function() {
        return view('family-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:admin'])->group(function () {
    Route::get('/admin-home', function() {
        return view('admin-home');
    });
});

Route::middleware(['App\Http\Middleware\UserMiddleware:supervisor'])->group(function () {
    Route::get('/supervisor-home', function() {
        return view('supervisor-home');
    });
});

Route::get('/new-role', function () {
    return view('new-role');
});