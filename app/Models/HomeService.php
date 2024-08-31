<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeService extends Model
{
    use HasFactory;
    protected $fillable = [
        'head',
        'tittle',
        'servicenameone',
        'serviceiconone',
        'servicenametwo',
        'serviceicontwo',
        'servicenamethree',
        'serviceiconthree',
        'servicenamefour',
        'serviceiconfour',
        'servicenamefive',
        'serviceiconfive',
        'servicenamesix',
        'serviceiconsix'
    ];
}
