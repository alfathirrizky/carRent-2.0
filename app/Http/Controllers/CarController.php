<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
}
