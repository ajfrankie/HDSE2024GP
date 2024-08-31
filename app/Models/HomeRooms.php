<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeRooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'head',
        'tittle',
        'roomone',
        'roomoneimg',
        'roomtwo',
        'roomtwoimg',
        'roomthree',
        'roomthreeimg',
        'roomfour',
        'roomfourimg',
    ];
}
