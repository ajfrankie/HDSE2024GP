<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'head',
        'tittle',
        'short_dis',
        'imageone',
        'imagetwo',
        'imagethree',
    ];
}
