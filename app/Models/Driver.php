<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'jns_kelamin',
        'no_telepon',
        'data_diri'
    ];
}
