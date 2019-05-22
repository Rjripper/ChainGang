<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newsletters')->insert([
            'title' => 'Het nieuwste nieuws',
            'reference' => 'Admin',            
            'message' => 'Er zijn 1000 fietsen verkocht! korting inkomen!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'deleted_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
