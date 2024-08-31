<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeRestaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'price',
        'short_dis',
        'image',
    ];
}
