<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PriceSetoran extends Model
{
    protected $table = 'pricesetorans';
    use HasFactory;
    protected $fillable = [
        'jumlah_setoran',
    ];
}
