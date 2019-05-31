<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use PhpParser\Node\Stmt\Foreach_;
use Faker\Factory as Faker;

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
        $faker = Faker::create();
        foreach (range(1,50) as $index)
        {
            DB::table('products')->insert([
                'brand_id' => $faker->numberBetween(1,6),
                'type_id' => $faker->numberBetween(1,6),            
                'category_id' => $faker->numberBetween(1,4),
                'product_images' => '',
                'product_name' => $faker->name,
                'price' => $faker->numberBetween(1.00,9999.99),
                'description' => 'Leuk ding, wel goed.',
                'specifications' => 'Zieksnel: 100km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }   
}
