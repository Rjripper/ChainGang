<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(NewsletterTableSeeder::class);
        $this->call(OrderItemTableSeeder::class);
        $this->call(SaleTableSeeder::class);
    }
}
