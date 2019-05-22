<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first_name' => 'Anton',
            'last_name' => 'austirol',            
            'address' => 'tirol',
            'zip_code' => '3838TI',
            'city' => 'Duutslan',
            'email' => 'austirolgmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'phonenumber' => '09000000',
            'password' => bcrypt('secret'),
            'wants_newsletter' => true,
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
