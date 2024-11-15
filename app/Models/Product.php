<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
{
    return $this->belongsTo(Category::class);
}

public function brand()
{
    return $this->belongsTo(Brand::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function images()
{
    return $this->morphMany(Image::class, 'imageable');
}
}
