<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    protected $fillable = ['nama', 'mobil', 'tgl_setoran', 'harga'];
}
