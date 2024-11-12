<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    /** @use HasFactory<\Database\Factories\ColonyFactory> */
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
