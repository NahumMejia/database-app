<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /** @use HasFactory<\Database\Factories\CardFactory> */
    use HasFactory;

    // Relación con el modelo Shopping
    public function shopping()
    {
        return $this->belongsTo(Shopping::class);
    }

    // Relación polimórfica para Comments
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}