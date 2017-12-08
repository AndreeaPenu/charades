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
            ['session_id' => 1,
            'word' => 'pasta'],
            ['session_id' => 1,
             'word' => 'banaan'],
            ['session_id' => 1,
             'word' => 'kanarie']
        );
    }
}
