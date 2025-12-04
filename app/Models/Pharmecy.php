<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmecy extends Model
{
    protected $table = 'pharmecies';   // your actual table name

    protected $fillable = [
        'name',
        'location',
        'number',
    ];
}

