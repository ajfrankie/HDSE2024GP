<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePic extends Model
{
    use HasFactory;
    protected $fillable = [
        'imageone',
        'imagetwo',
        'imagethree',
        'imagefour',
        'imagefive',
    ];
}
