<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DescriptionsTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(DayDescriptionTableSeeder::class);
    }
}
