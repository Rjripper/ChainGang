<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('order_items')->insert([
            'product_id' => 1,
            'order_id' => 1,
            'amount' => 200,            
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
