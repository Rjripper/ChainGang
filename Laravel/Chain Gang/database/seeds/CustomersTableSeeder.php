<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'first_name' => 'Anton',
            'last_name' => 'uit Tirol',            
            'address' => 'Zupertollstrasse 23',
            'zip_code' => '3838TI',
            'city' => 'Tirol',
            'email' => 'a.uittirol@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'phonenumber' => '09000000',
            'password' => Hash::make('antontirol'),
            'has_newsletter' => true,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'first_name' => 'Peter',
            'last_name' => 'niet zo Vries',            
            'address' => 'Doetinchem',
            'zip_code' => '3838TI',
            'city' => 'Nederland',
            'email' => 'pvries@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'phonenumber' => '09000000',
            'password' => Hash::make('peternietzovries'),
            'has_newsletter' => true,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('customers')->insert([
            'first_name' => 'lobeltjan',
            'last_name' => 'smidersweyusmans',            
            'address' => 'Bolsewiekjestraat 211',
            'zip_code' => '3233QA',
            'city' => 'Verwegistan',
            'email' => 'lobeltjan@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'phonenumber' => '123123123',
            'password' => Hash::make('lobeltjan'),
            'has_newsletter' => true,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
