<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Price;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($id)
    {
        // Ambil data mobil dan relasi harga berdasarkan durasi
        $car = Car::with('prices')->findOrFail($id);

        return view('carDetail', compact('car'));
    }
    public function index()
    {
        $cars = Car::all();

        return view('carsList', compact('cars'));
    }
    public function create($id)
    {
        $car = Car::findOrFail($id);
        $prices = Price::where('car_id', $id)->get();
        return view('bookingPage', compact('car', 'prices'));
    }

}
