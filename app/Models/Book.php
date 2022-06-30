<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $dates = ['published_at'];

public function category()
{
    return $this->belongsTo(Category::class);
}

public function publisher()
{
    return $this->belongsTo(Publisher::class);
}
}
