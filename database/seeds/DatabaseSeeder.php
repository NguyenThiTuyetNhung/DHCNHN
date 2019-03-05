<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(GroupProductSeeder::class);
        $this->call(DistributionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(CompanieSeeder::class);
        $this->call(AprioriSeeder::class);
        $this->call(AdvertieSeeder::class);
        $this->call(NewSeeder::class);
        $this->call(ProductInputSeeder::class);
        $this->call(StatisticsSeeder::class);
    }
}
