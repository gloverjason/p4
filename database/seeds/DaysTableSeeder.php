<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $days = [
            ['2018-04-01', '0', '30'],
            ['2018-04-02', '0', '30'],
            ['2018-04-03', '90', '30'],
            ['2018-04-04', '0', '40'],
            ['2018-04-05', '0', '30'],
            ['2018-04-06', '0', '0'],
            ['2018-04-07', '240', '20'],
            ['2018-04-08', '30', '0'],
            ['2018-04-09', '15', '45'],
        ];

        foreach ($days as $key => $dayData) {
            $day = new Day();

            $day->date = $dayData[0];
            $day->moderate_activity = $dayData[1];
            $day->vigorous_activity = $dayData[2];

            $day->save();
        }
    }
}
