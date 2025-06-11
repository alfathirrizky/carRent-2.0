<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'mobil', 'tanggal_Setoran', 'harga'];
}
