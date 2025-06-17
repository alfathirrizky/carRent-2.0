<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cicilan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nominal',
        'tanggal_cicilan'
    ];
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
