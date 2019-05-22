<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'track_and_trace', 'order_date', 'shipped_date', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
