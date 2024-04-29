<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'check_in',
        'check_out',
        'tittle',
        'board',
        'status',
        'fst_name',
        'lst_name',
        'email',
        'phone_num',
        'message',
    ];
}
