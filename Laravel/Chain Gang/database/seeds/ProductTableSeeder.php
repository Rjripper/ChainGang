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
        //driewielers 
            DB::table('products')->insert([
                'brand_id' => 3,
                'type_id' => 6,            
                'category_id' => 3,
                'product_images' => 'images/products/driewieler/driewieler1.jpg',
                'product_name' => 'Driewieler Batavus X28',
                'price' => 500,
                'description' => 'Leuk ding, wel goed.',
                'specifications' => 'Snelheid: 10km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 1,
                'type_id' => 6,            
                'category_id' => 3,
                'product_images' => 'images/products/driewieler/driewieler2.jpg',
                'product_name' => 'Driewieler Gazelle 3D',
                'price' => 300,
                'description' => 'Leuk ding, beetje traag',
                'specifications' => 'snelheid: 5km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 4,
                'type_id' => 6,            
                'category_id' => 3,
                'product_images' => 'images/products/driewieler/driewieler3.jpg',
                'product_name' => 'Driewieler Sparta 12',
                'price' => 1000,
                'description' => 'Het pareltje onder de driewielers',
                'specifications' => 'snelheid: 25km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 5,
                'type_id' => 6,            
                'category_id' => 3,
                'product_images' => 'images/products/driewieler/driewieler4.jpg',
                'product_name' => 'Driewieler DF83',
                'price' => 600,
                'description' => 'Een erg mooie fiets en goed voor ouderen die minder goed te been zijn.',
                'specifications' => 'snelheid: 12km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // elek
            DB::table('products')->insert([
                'brand_id' => 6,
                'type_id' => 3,            
                'category_id' => 2,
                'product_images' => 'images/products/elek/elek1.jpg',
                'product_name' => 'E-Bike C238',
                'price' => 1000,
                'description' => 'Lekker snel, opladen is binnen 4 uur klaar.',
                'specifications' => 'snelheid: 15km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 6,
                'type_id' => 3,            
                'category_id' => 2,
                'product_images' => 'images/products/elek/elek2.jpg',
                'product_name' => 'E-Bike B88',
                'price' => 1200,
                'description' => 'Een erg mooie fiets en goed voor ouderen die minder goed te been zijn.',
                'specifications' => 'snelheid: 18km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 6,
                'type_id' => 3,            
                'category_id' => 2,
                'product_images' => 'images/products/elek/elek3.jpg',
                'product_name' => 'E-Bike K84',
                'price' => 900,
                'description' => 'Geschikte fiets voor ouderen',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            //heren
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 4,            
                'category_id' => 1,
                'product_images' => 'images/products/heren/herenfiets1.jpg',
                'product_name' => 'Herenfiets PR3',
                'price' => 350,
                'description' => 'Redelijk zwaar model, met goede wegligging',
                'specifications' => 'snelheid: 8km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 3,
                'type_id' => 4,            
                'category_id' => 1,
                'product_images' => 'images/products/heren/herenfiets2.jpg',
                'product_name' => 'Herenfiets OI84',
                'price' => 550,
                'description' => 'Licht model, met goede wegligging en dun frame',
                'specifications' => 'snelheid: 9km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 3,
                'type_id' => 4,            
                'category_id' => 1,
                'product_images' => 'images/products/heren/herenfiets3.jpg',
                'product_name' => 'Herenfiets KE84',
                'price' => 450,
                'description' => 'Geschikte fiets voor het maken van snelheid',
                'specifications' => 'snelheid: 15km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 4,            
                'category_id' => 1,
                'product_images' => 'images/products/heren/herenfiets4.jpg',
                'product_name' => 'Herenfiets PD84',
                'price' => 400,
                'description' => 'Deze fiets heeft goede snelheid en goede wegligging',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            //kinderen
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/kinderen/kinder1.jpg',
                'product_name' => 'Kinderfiets PPP334',
                'price' => 400,
                'description' => 'Deze fiets heeft goede snelheid en goede wegligging',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 5,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/kinderen/kinder2.jpg',
                'product_name' => 'Kinderfiets BR11',
                'price' => 300,
                'description' => 'Deze fiets heeft goede snelheid en goede wegligging',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 3,
                'type_id' => 6,            
                'category_id' => 6,
                'product_images' => 'images/products/kinderen/kinder3.jpg',
                'product_name' => 'Kinderfiets SW84',
                'price' => 500,
                'description' => 'Deze fiets heeft goede snelheid en goede wegligging',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 4,
                'product_images' => 'images/products/kinderen/kinder4.jpg',
                'product_name' => 'Kinderfiets PD584',
                'price' => 450,
                'description' => 'Deze fiets heeft goede snelheid en goede wegligging',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            //oma
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/oma/oma1.jpg',
                'product_name' => 'Oma PLP334',
                'price' => 400,
                'description' => 'Deze fiets heeft goede snelheid en sterk frame',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/oma/oma2.jpg',
                'product_name' => 'Oma HDK44',
                'price' => 200,
                'description' => 'Deze fiets heeft goede snelheid en sterk frame',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/oma/oma3.jpg',
                'product_name' => 'Oma PD33',
                'price' => 250,
                'description' => 'Deze fiets heeft goede snelheid en sterk frame',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('products')->insert([
                'brand_id' => 2,
                'type_id' => 5,            
                'category_id' => 6,
                'product_images' => 'images/products/oma/oma4.jpg',
                'product_name' => 'Oma PT4',
                'price' => 150,
                'description' => 'Deze fiets heeft goede snelheid en sterk frame',
                'specifications' => 'snelheid: 11km/u',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }   
}
