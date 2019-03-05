<?php

use Illuminate\Database\Seeder;

class AdvertieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('adverties')->insert([
        	array(
        		'name'=>'Tri ân khách hàng',
        		'url'=>'quangcao',
        		'width'=>120000,
        		'height'=>125000,
        		'link'=>'image.jpg',
        		'target'=>'kết quả ',
        		'position'=>1,
        		'order'=>'khách hàng',
        		'status'=>2,
        	),
        ]);
    }
}
