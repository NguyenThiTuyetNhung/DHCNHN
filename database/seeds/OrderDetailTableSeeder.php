<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('order_details')->insert([
        	array(
        		'quantity'=>'2',
        		'price'=> 500000,
        		'order_id'=> 1,
        		'product_id'=> 1,
        		'size_id' => 1,
        	)
        ]);
         DB::table('order_details')->insert([
        	array(
        		'quantity'=>'3',
        		'price'=> 540000,
        		'order_id'=> 1,
        		'product_id'=> 2,
        		'size_id' => 1,
        	)
        ]);
    }
}
