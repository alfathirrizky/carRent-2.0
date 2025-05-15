<?php

use App\Models\Admin;
use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome', ['title' => 'car list', 'cars' => Car::all()]);
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
Route::get('/car detail', function () {

    return view('carDetail');
});
Route::get('/booking', function () {
    return view('bookingPage');
});
<<<<<<< HEAD
Route::get('/testimoni', function () {
    return view('reviewPage');
});
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
=======
Route::get('/orderdetail', function () {
    return view('orderDetail');
});
>>>>>>> responsive-fe
