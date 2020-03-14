<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'title', 'price', 'describe', 'image',
    ];

    protected $casts = [
        'price' => 'double',
    ];
//
//    protected $hidden = [
//        'time',
//    ];
}
