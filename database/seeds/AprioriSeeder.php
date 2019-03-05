<?php

use Illuminate\Database\Seeder;

class AprioriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('aprioris')->insert([
        	array(
                'product_id' => 1,
        		'view1'=>1,
        		'view2'=>2,
        	),
        ]);
    }
}
