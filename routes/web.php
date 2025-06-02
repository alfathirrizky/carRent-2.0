<?php

use App\Models\Car;
use App\Models\Admin;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome', ['title' => 'car list', 'cars' => Car::all(), 'reviews' => Review::all()]);
});

Route::get('/review', function () {
    return view('reviewPage', ['title' => 'testimoni', 'reviews' => Review::all()]);
});

Route::get('/cars', function () {
    return view('carsList', ['title' => 'car detail', 'cars' => Car::all()]);
});

Route::get('/car detail/{id}', function ($id) {
    $car = Car::find($id);
    return view('carDetail', ['car' => $car]);
});

Route::get('/contact us', function () {
    return view('contactUs', ['title' => 'contact us', 'admins' => Admin::all()]);
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/booking', function () {
    return view('bookingPage');
});

Route::get('/orderdetail', function () {
    return view('orderDetail');
});

Route::get('/testimoni', function () {
    return view('formReview');
});

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::post('/testimoni', [ReviewController::class, 'store'])->name('testimoni.store');

Route::get('/reviewpage', [ReviewController::class, 'index'])->name('review.index');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/booking/{id}', [BookingController::class, 'create']);

Route::get('/booking/{id}', [BookingController::class, 'create'])->name('booking.create');

Route::get('/booking/{id}', [BookingController::class, 'create'])->name('booking.create');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.detail');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::get('/booking/create/{id}', [BookingController::class, 'create'])->name('booking.create');


