<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactIcon extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_icon',
        'email_icon',
        'phone_icon',
        'weburl_icon',
    ];
}
