<?php

use Illuminate\Database\Seeder;

class wordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('words')->insert(

            ['word' => 'pasta']
        );
        DB::table('words')->insert(
            ['word' => 'banaan']
        );
        DB::table('words')->insert(
            ['word' => 'kanarie']

        );
    }
}
