<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'quantity', 'notes', 'order_id', 'meal_id'
    ];

    public function meals()
    {
        return $this->belongsTo(Meal::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
