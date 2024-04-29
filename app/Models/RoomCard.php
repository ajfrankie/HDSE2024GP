<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'person_count',
        'room_category',
        'price',
        'short_dis',
        'image',
        'status',
    ];

}
