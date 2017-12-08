<?php

use Illuminate\Database\Seeder;

class sessionTableSeeder extends Seeder
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
            ['session_key' => 1]
        );
    }
}
