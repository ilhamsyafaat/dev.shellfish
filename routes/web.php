<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/destination', function () {
    return view('user.destination');
});

Route::get('/transportation', function () {
    return view('user.transportation');
});

Route::get('/booking', function () {
    return view('user.booking');
});

// Admin
// Route::get('/login', [LoginController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    
    //shell fish admin    
    })->name('dashboard');
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
