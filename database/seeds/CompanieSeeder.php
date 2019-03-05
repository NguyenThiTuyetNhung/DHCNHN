<?php

use Illuminate\Database\Seeder;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('companies')->insert([
        	array(
        		'name'=>'Thái Phương',
        		'address'=>'Gia Lâm Hà Nội',
        		'phone'=>'1234567898',
        		'email'=>'thaiphuong123@gmail.com',
        	),
        ]);
    }
}
