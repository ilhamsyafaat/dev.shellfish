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
    })->name('dashboard');
    
    //shell fish admin    
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin');
    
    //destination
    Route::prefix('admin')->group(function(){
    Route::get('/list-destination', function () {
        return view('admin.destination.list');
    })->name('add-destination');
    Route::get('/add-destination', function () {
        return view('admin.destination.add');
    })->name('add-destination');
    Route::get('/add-city', function () {
        return view('admin.destination.add_city');
    })->name('add-city');
});
});
