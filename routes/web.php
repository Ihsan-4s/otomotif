<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/service', function(){
    return view('service');
})->name('service');

Route::get('/models', function(){
    return view('models.models');
})->name('models');

Route::get('/parts/parts', function(){
    return view('parts.parts');
})->name('part');

Route::get('/booking', function(){
    return view('booking');
})->name('booking');

Route::post('/booking/submit', [BookingController::class, 'submit'])->name('booking.submit');










