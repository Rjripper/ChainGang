<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderItem;

class Order extends Model
{
    //
    protected $fillable = [
        'track_and_trace', 'order_date', 'user_id', 'customer_id', 'shipped_date', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function total_price(Order $order)
    {
        $order_items = OrderItem::where('order_id', '=', $order->id)->get();
        $total = 0;
        foreach($order_items as $order_item){
            $amount = $order_item->amount;
            $item = Product::where('id', '=', $order_item->product_id)->first();
            $total += $amount * $item->price;
        }
        return $total;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
