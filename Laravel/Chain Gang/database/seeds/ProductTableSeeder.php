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
        foreach (range(1,25) as $index)
        {
            DB::table('products')->insert([
                'brand_id' => $faker->numberBetween(1,6),
                'type_id' => $faker->numberBetween(1,6),            
                'category_id' => $faker->numberBetween(1,4),
                'product_name' => $faker->name,
                'price' => $faker->numberBetween(1.00,9999.99),
                'description' => 'Leuk ding, wel goed.',
                'specifications' => 'Zieksnel: 100km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        }
        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets3000',
        //     'price' => 9.99,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiet_3000',
        //     'price' => 312.12,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'nimbus_3000',
        //     'price' => 999.98,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiet_2000',
        //     'price' => 32.12,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);
        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiet_3',
        //     'price' => 2.00,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_65000',
        //     'price' => 112.00,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_65',
        //     'price' => 1123.00,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_1564',
        //     'price' => 11.00,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_6578',
        //     'price' => 9112.00,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_1254876',
        //     'price' => 19.99,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_1939',
        //     'price' => 19.45,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);

        // DB::table('products')->insert([
        //     'brand_id' => 1,
        //     'type_id' => 1,            
        //     'category_id' => 1,
        //     'product_name' => 'fiets_21041890',
        //     'price' => 24.05,
        //     'description' => 'Leuk ding, wel goed.',
        //     'specifications' => 'Zieksnel: 100km/u',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);
    }
}
