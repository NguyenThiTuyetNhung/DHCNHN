<?php

use Illuminate\Database\Seeder;

class DistributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('distributions')->insert([
        	array(
        		'name'=>'Yamaha chi nhánh Văn Giang Hưng Yên',
        	)
        ]);
    }
}
