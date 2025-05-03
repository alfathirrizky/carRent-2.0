<?php

use App\Models\Admin;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
