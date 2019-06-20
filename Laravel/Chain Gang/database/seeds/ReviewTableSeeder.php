<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reviews')->insert([
            'customer_id' => 1,
            'product_id' => 1,            
            'rating' => 5,
            'title' => 'Tof!',
            'message' => 'Ik vind het een super toffe fiets! Ik kan er niet zonder!',       
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reviews')->insert([
            'customer_id' => 1,
            'product_id' => 1,            
            'rating' => 1,
            'title' => 'Re:Tof!',
            'message' => 'Iemand heeft mijn fiets binnen 2 uur gestolen! ;\'( .',       
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reviews')->insert([
            'customer_id' => 2,
            'product_id' => 3,            
            'rating' => 4,
            'title' => 'Cool!',
            'message' => 'I am not dutch but I like dis dutch bike its very froom!',       
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('reviews')->insert([
            'customer_id' => 3,
            'product_id' => 1,            
            'rating' => 4,
            'title' => 'Hode!',
            'message' => 'Niffo deze is echt goeie!',       
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}
