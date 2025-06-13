<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Admin;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'title' => 'Homepage',
            'cars' => Car::all(),
            'reviews' => Review::all(),
            'admins' => Admin::all(),
        ]);
    }
}
