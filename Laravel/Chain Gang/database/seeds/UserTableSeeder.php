<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'atirol',
            'email' => 'austirol@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('henkiespankie69'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        DB::table('users')->insert([
            'first_name' => 'Mustafa',
            'last_name' => 'Yilmaz',            
            'username' => 'meyilmaz',
            'email' => 'meyilmaz@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('mrmoosti'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
