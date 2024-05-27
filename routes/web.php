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
    return view('home');
});

//Routes Introduction
Route::get('/register-account-introduction', function () {
    return view('register-account-introduction');
})->name('register-account-introduction');

Route::get('/scheduled-session-introduction', function () {
    return view('scheduled-session-introduction');
})->name('scheduled-session-introduction');

Route::get('/preferences-introduction', function () {
    return view('preferences-introduction');
})->name('preferences-introduction');

Route::get('/booking-introduction', function () {
    return view('booking-introduction');
})->name('booking-introduction');

//Routes Activation
Route::get('/register-account-activation', function () {
    return view('scheduler-activation/register-account');
})->name('register-account-activation');

Route::get('/scheduled-session-activation', function () {
     return view('scheduler-activation/scheduled-session');
})->name('scheduled-session-activation');

Route::get('/preferences-activation', function () {
    return view('scheduler-activation/preferences');
})->name('preferences-activation');

Route::get('/booking-activation', function () {
     return view('scheduler-activation/booking');
})->name('booking-activation');

Route::get('/payment-activation', function () {
     return view('scheduler-activation/payment-activation');
})->name('payment-activation');


//Others
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
