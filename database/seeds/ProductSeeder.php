<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	array(
        		'name'=>'Tên sản phẩm',
        		'detail'=>'Chi tiết sản phẩm',
        		'price'=>120000,
        		'price_new'=>125000,
        		'image'=>'image.jpg',
        		'view'=>1,
        		'status'=>1,
        		'Distribution_id'=>1,
        		'Group_product_id'=>2,
        	),
        	array(
        		'name'=>'Săm xe máy',
        		'detail'=>'Săm to, săm nhỏ, cao su mềm',
        		'price'=>65000,
        		'price_new'=>80000,
        		'image'=>'image.jpg',
        		'view'=>1,
        		'status'=>1,
        		'Distribution_id'=>001,
        		'Group_product_id'=>002,
        	)
        ]);
        	
  
    }
}
