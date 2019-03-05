<?php

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('news')->insert([
        	array(
        		'name'=>'Lốp không săm Airblade 2018',
        		'image'=>'image.jpg',
        		'description'=>'sản phẩm mới, an toàn',
        		'content'=>'số lượng có hạn',
        	)
        ]);
    }
}
   