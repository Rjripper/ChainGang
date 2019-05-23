<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_images')->insert([
            'product_id' => 1,
            'image' => 'images/products/1/1.png',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 1,
            'image' => 'images/products/1/2.png',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 1,
            'image' => 'images/products/1/3.png',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
