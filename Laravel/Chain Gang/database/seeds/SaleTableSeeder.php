<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'title' => 'Voor echte heren!',
            'user_id' => 1,
            'product_id' => 2,
            'sale' => 30,
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('sales')->insert([
            'title' => 'Toffe bayka!',
            'user_id' => 1,
            'product_id' => 3,
            'sale' => 10,
            'start_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
