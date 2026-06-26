<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crops extends Model
{
    protected $fillable = [
        crop_name,
        area,
        date
    ];
}
