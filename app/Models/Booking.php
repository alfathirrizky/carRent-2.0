<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'telepon',
        'mobil',
        'durasi',
        'metode_pembayaran',
        'tanggal_booking'
    ];
}
