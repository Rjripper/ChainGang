<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'status_id' => 1,
            'customer_id' => 1,
            'user_id' => 1,            
            'track_and_trace' => 'KSG334321',
            'order_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'shipped_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('orders')->insert([
            'status_id' => 1,
            'customer_id' => 1,
            'user_id' => 1,            
            'track_and_trace' => 'AS234132',
            'order_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'shipped_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('orders')->insert([
            'status_id' => 1,
            'customer_id' => 2,
            'user_id' => 2,            
            'track_and_trace' => 'AS2341S37632',
            'order_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'shipped_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
