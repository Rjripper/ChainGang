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
            'is_admin' => false,
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

        DB::table('users')->insert([
            'first_name' => 'Robert-Jan',
            'last_name' => 'Schmidt-Weymans',            
            'username' => 'rjweymans',
            'email' => 'rjweymans@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('mrweymans'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Tim',
            'last_name' => 'Kremer',            
            'username' => 'tkremer',
            'email' => 'tkremer@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('mrkremer'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Joost',
            'last_name' => 'Schooltink',            
            'username' => 'jschooltink',
            'email' => 'jschooltink@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('mrschooltink'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Erik',
            'last_name' => 'Turkestone',            
            'username' => 'eturkestone',
            'email' => 'e.turkesteen@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => true,
            'password' => Hash::make('mrturkesteen'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Dadolf',
            'last_name' => 'Ghitler',            
            'username' => 'dghitler',
            'email' => 'dghitler@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => false,
            'password' => Hash::make('jasgoed'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Ossama',
            'last_name' => 'Binluden',            
            'username' => 'binluden',
            'email' => 'binluden@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'is_admin' => false,
            'password' => Hash::make('mrbinluden'),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
