<?php

use App\Http\Controllers\BookingController;
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
    return view('user.home');
});

Route::get('/destination', function () {
    return view('user.destination');
});

Route::get('/transportation', function () {
    return view('user.transportation');
});

Route::get('/special', function () {
    return view('user.special');
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
    Route::post('/store/booking', [BookingController::class, 'store'])->name('store.booking');
    

    //destination
    Route::prefix('admin')->group(function () {
        Route::get('/list-destination', function () {
            return view('admin.destination.list');
        })->name('list-destination');
        Route::get('/add-destination', function () {
            return view('admin.destination.add');
        })->name('add-destination');
        Route::get('/add-city', function () {
            return view('admin.destination.add_city');
        })->name('add-city');

        Route::get('/list-transportation', function(){
            return view('admin.transportation.list');
        })->name('list-transportation');
        Route::get('/add-transportation', function(){
            return view('admin.transportation.add');
        })->name('add-transportation');
        Route::get('/view/booking', [BookingController::class, 'index'])->name('view.booking');
});
});
