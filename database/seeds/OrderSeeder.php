<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('orders')->insert([
        	array(
        		'Total_memory'=>'500000',
        		'Request'=>'cẩn thận, hàng dễ vỡ',
        		'Delivered'=>'chuyển phát nhanh',
        		'Address'=>'Minh Khai - Bắc Từ Liêm - Hà Nội',
                'user_id' => 1,
        	)
        ]);
    }
}
