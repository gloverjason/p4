<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            ['2018-04-01', '0', '30'],
            ['2018-04-02', '0', '30'],
            ['2018-04-03', '90', '30'],
            ['2018-04-04', '90', '0'],
            ['2018-04-05', '120', '20'],
            ['2018-04-06', '90', '30'],
            ['2018-04-07', '20', '0'],
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
