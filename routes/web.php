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


Route::post('/store/booking', [BookingController::class, 'store'])->name('store.booking');

// Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin');

    //shell fish admin    
    // Route::get('/admin', function () {
    //     return view('admin.dashboard');
    // })->name('admin');
    

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
        Route::get('/edit-destination', function(){
            return view('admin.destination.edit ');
        })->name('edit-destination');

        Route::get('/list-transportation', function(){
            return view('admin.transportation.list');
        })->name('list-transportation');
        Route::get('/add-transportation', function(){
            return view('admin.transportation.add');
        })->name('add-transportation');
        Route::get('/detail-transportation', function(){
            return view('admin.transportation.detail');
        })->name('detail-transportation');

        Route::get('/add-specialoffers', function(){
            return view('admin.special.add');
        })->name('add-specialoffers');
        Route::get('/specialoffers', function(){
            return view('admin.special.special');
        })->name('specialoffers');
        Route::get('/edit-specialoffers', function(){
            return view('admin.special.edit');
        })->name('edit-specialoffers');

        Route::get('/view/booking', [BookingController::class, 'index'])->name('view.booking');
        Route::get('/booking/detail', function(){
            return view('admin.booking.detail');
        })->name('booking-detail');
});
});
