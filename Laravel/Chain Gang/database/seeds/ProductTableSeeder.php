<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'brand_id' => 1,
            'type_id' => 1,            
            'category_id' => 1,
            'product_name' => 'fiets3000',
            'price' => 9.99,
            'description' => 'Leuk ding, wel goed.',
            'specifications' => 'Zieksnel: 100km/u',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'brand_id' => 1,
            'type_id' => 1,            
            'category_id' => 1,
            'product_name' => 'fiet_3000',
            'price' => 312.12,
            'description' => 'Leuk ding, wel goed.',
            'specifications' => 'Zieksnel: 100km/u',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
