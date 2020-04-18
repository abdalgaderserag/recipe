<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'location', 'cost', 'time',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
