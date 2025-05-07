<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;
    protected $fillable = ['nama_mobil', 'durasi', 'harga', 'bahan_bakar', 'tipe', 'seater', 'kategori', 'gambar_mobil'];
}
