<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $fillable = [
        'amount', 'created_at', 'updated_at', 'deleted_at'
    ];

}
