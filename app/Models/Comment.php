<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    // Relación con el usuario que realizó el comentario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación polimórfica con modelos comentables
    public function commentable()
    {
        return $this->morphTo();
    }

}