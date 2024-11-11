<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    use HasFactory;


    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function colonies()
    {
        return $this->hasMany(Colony::class);
    }
}
