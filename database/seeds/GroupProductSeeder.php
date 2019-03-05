<?php

use Illuminate\Database\Seeder;

class GroupProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_products')->insert([
        	array(
        		'name'=>'nhóm nhựa honda',
        		'content'=>'nhựa chính hãng',
        		'image'=>'image.jpg',
        		'order'=>'nhựa honda Airblade 2012',
        		'status'=>1,
        	)
        ]);
    }
}
