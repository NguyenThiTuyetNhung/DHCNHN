<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contacts')->insert([
        	array(
        		'name'=>'người liên hệ',
        		'company'=>'honda việt nam',
        		'address'=>'hà nội việt nam',
        		'email'=>'honda123@gmail.com',
        		'tell'=>'1234535469',
        		'detail'=>'honda là nhà phân phối độc quyền tại việt nam, chuyên cung cấp hàng chính hãng',
        	)
        ]);
    }
}
