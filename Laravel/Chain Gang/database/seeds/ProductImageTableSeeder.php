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
            'image' => 'images/products/1/1.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 1,
            'image' => 'images/products/1/2.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 1,
            'image' => 'images/products/1/3.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        //
        DB::table('product_images')->insert([
            'product_id' => 2,
            'image' => 'images/products/2/1.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 2,
            'image' => 'images/products/2/2.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 2,
            'image' => 'images/products/2/3.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 2,
            'image' => 'images/products/2/4.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //
        DB::table('product_images')->insert([
            'product_id' => 3,
            'image' => 'images/products/3/1.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 3,
            'image' => 'images/products/3/2.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('product_images')->insert([
            'product_id' => 3,
            'image' => 'images/products/3/3.jpg',        
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
