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
<<<<<<< HEAD
            ['word' => 'pasta']
        );
        DB::table('words')->insert(
            ['word' => 'banaan']
        );
        DB::table('words')->insert(
            ['word' => 'kanarie']
=======
            [
            'word' => 'pasta'],
            [
             'word' => 'banaan'],
            [
             'word' => 'kanarie']
        );
        DB::table('words')->insert(
            [
             'word' => 'banaan']
        );
        DB::table('words')->insert(
            [
             'word' => 'kanarie']
>>>>>>> 20eac87410c06b79f8315a0a9742035011202701
        );
    }
}
