<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class farmers extends Model
{
    protected $fillable = [
        'name',
        'village',
        'phone',
    ];
}
