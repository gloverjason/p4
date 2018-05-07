<?php

use Illuminate\Database\Seeder;
use App\Day;
use App\Description;

class DayDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Activity descriptions on the right will be associated with the dates on the left
        $days =[
            '2018-04-01' => ['running'],
            '2018-04-02' => ['basketball'],
            '2018-04-03' => ['cycling', 'other'],
            '2018-04-04' => ['swimming'],
            '2018-04-05' => ['running'],
            '2018-04-07' => ['hiking', 'soccer']
        ];

        // Create a pivot for each day's description
        foreach ($days as $date => $descriptions) {

            // Get a day
            $day = Day::where('date', 'like', $date)->first();

            // Add description(s) for this day
            foreach ($descriptions as $descriptionName) {
                $description = Description::where('type', 'LIKE', $descriptionName)->first();

                // Connect description to day
                $day->descriptions()->save($description);
            }
        }
    }
}
