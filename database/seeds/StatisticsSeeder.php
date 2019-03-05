<?php

use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
        	array(
        		'User_id'=>1,
        		'Distribution_id'=>1,
        		'Viewnumber'=>10,
        	),
        ]); 
    }
}
