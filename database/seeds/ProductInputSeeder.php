<?php

use Illuminate\Database\Seeder;

class ProductInputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	 DB::table('product_inputs')->insert([
        	array(
        		'Product_id'=>1,
        		'Size_id'=>1,
        	),
        ]);
    }
}
