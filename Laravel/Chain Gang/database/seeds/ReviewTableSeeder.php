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
            'title' => 'Leuk ding',
            'message' => 'berichtje',       
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}
