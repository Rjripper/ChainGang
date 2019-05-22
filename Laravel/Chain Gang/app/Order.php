<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'track_and_trace', 'order_date', 'shipped_date', 'created_at', 'updated_at', 'deleted_at'
    ];


}
