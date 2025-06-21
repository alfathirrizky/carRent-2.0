<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function unexpexted(): HasMany
    {
        return $this->hasMany(UnexpectedCost::class);
    }
}
