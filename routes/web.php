<?php

use App\Models\Admin;
use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TestimoniController;
use App\Models\Review;

Route::get('/', function () {
    return view('welcome', ['title' => 'car list', 'cars' => Car::all(), 'reviews' => Review::all()]);
});

Route::get('/review', function () {
    return view('reviewPage', ['title' => 'testimoni', 'reviews' => Review::all()]);
});

Route::get('/cars', function () {
    return view('carsList', ['title' => 'car detail', 'cars' => Car::all()]);
});

Route::get('/contact us', function () {
    return view('contactUs', ['title' => 'contact us', 'admins' => Admin::all()]);
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/car detail/{id}', function ($id) {
    $car = Car::find($id);
    return view('carDetail', ['car' => $car]);
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

Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');