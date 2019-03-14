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
        	),

            array(
                'name'=>'xe honda',
                'content'=>'hàng chính hãng',
                'image'=>'image.jpg',
                'order'=>'đồ honda chính hiệu',
                'status'=>0,
            ),

            array(
                'name'=>'xe yamaha',
                'content'=>'hàng chính hãng',
                'image'=>'image.jpg',
                'order'=>'đồ yamaha chính hiệu',
                'status'=>1,
            ),

            array(
                'name'=>'xe suzuki',
                'content'=>'hàng nhập khẩu',
                'image'=>'image.jpg',
                'order'=>'nhựa suzuki',
                'status'=>0,
            ),

            array(
                'name'=>'xe piaggio',
                'content'=>'hàng gia công',
                'image'=>'image.jpg',
                'order'=>'chế điện tử piaggio',
                'status'=>1,
            )
        ]);
    }
}
