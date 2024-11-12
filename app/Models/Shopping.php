<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    /** @use HasFactory<\Database\Factories\ShoppingFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo PaymentMethod
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    // Relación polimórfica para Comments
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relación con el modelo Cart
    public function carts()
    {
        return $this->hasMany(Card::class);
    }
}