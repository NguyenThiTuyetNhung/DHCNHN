<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sizes')->insert([
        	array(
        		'size'=>1,
        	),
        ]);
         DB::table('sizes')->insert([
        	array(
        		'size'=>2,
        	),
        ]);
    }
}
