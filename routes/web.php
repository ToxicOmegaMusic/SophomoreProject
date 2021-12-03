<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/doctor-home', function() {
//     return view('doctor-home');
// });

Route::get('/tail', function() {
    return view('tailwind');
});


Route::middleware(['App\Http\Middleware\CaregiverMiddleware'])->group(function () {
    Route::get('/caregiver-home', function() {
        return view('caregiver-home');
    });
});

Route::middleware(['App\Http\Middleware\DoctorMiddleware'])->group(function () {
    Route::get('/doctor-home', function() {
        return view('doctor-home');
    });
});

Route::middleware(['App\Http\Middleware\PatientMiddleware'])->group(function () {
    Route::get('/patient-home', function() {
        return view('patient-home');
    });
});