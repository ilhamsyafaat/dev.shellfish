<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\SpecialOfferController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\UserController;
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

Route::get('/transportation', [UserController::class,'Transportation']);
Route::get('/detail-transportation', function(){
    return view('user.detail-transportation');
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
        Route::get('/view/booking', [BookingController::class, 'index'])->name('view.booking');
        Route::get('/booking/detail/{id}', [BookingController::class, 'edit'])->name('booking-detail');
        Route::get('/booking/delete/{id}', [BookingController::class, 'destroy'])->name('booking-delete');
    });
    Route::prefix('destination')->group(function () {
        Route::get('/add-city', [CityController::class, 'index'])->name('add-city');
        Route::post('/store-city', [CityController::class, 'store'])->name('store-city');
        Route::get('/delete-city/{id}', [CityController::class, 'destroy'])->name('delete-city');
        Route::get('/add-destination', [DestinationController::class,'create'])->name('add-destination');
        Route::get('/view-destination', [DestinationController::class,'index'])->name('view-destination');
        Route::post('/store-destination', [DestinationController::class,'store'])->name('store-destination');
        Route::get('/edit-destination/{id}', [DestinationController::class,'edit'])->name('edit-destination');
        Route::post('/update-destination/{id}', [DestinationController::class,'update'])->name('update-destination');
        Route::get('/delete-photo/{id}', [DestinationController::class,'delete'])->name('delete-photo');
        Route::get('/destroy-destination/{id}', [DestinationController::class,'destroy'])->name('destroy-destination');
    });
    Route::prefix('tranportation')->group(function(){
        Route::get('/list-transportation', [TransportationController::class,'index'])->name('list-transportation');
        Route::get('/add-transportation',[TransportationController::class,'create'])->name('add-transportation');
        Route::post('/store-transportation',[TransportationController::class,'store'])->name('store-transportation');
        Route::get('/detail-transportation/{id}',[TransportationController::class,'edit'])->name('detail-transportation');
        Route::post('/update-transportation/{id}',[TransportationController::class,'update'])->name('update-transportation');
        Route::get('/destroy-transportation/{id}',[TransportationController::class,'destroy'])->name('destroy-transportation');
    });
    Route::prefix('special')->group(function(){
        Route::get('/specialoffers', [SpecialOfferController::class,'index'])->name('specialoffers');
        Route::get('/add-specialoffers',[SpecialOfferController::class,'create'])->name('add-specialoffers');
        Route::post('/store-specialoffers',[SpecialOfferController::class,'store'])->name('store-specialoffers');
        Route::get('/edit-specialoffers/{id}',[SpecialOfferController::class,'edit'])->name('edit-specialoffers');
        Route::post('/update-specialoffers/{id}',[SpecialOfferController::class,'update'])->name('update-specialoffers');
        Route::get('/destroy-specialoffers/{id}',[SpecialOfferController::class,'destroy'])->name('destroy-specialoffers');
    });
});
