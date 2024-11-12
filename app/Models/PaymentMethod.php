<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentMethodFactory> */
    use HasFactory;

    // Relación polimórfica para Comments
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relación con shoppings
    public function shoppings()
    {
        return $this->hasMany(Shopping::class);
    }
}