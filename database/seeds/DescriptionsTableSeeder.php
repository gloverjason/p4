<?php

use Illuminate\Database\Seeder;
use App\Description;

class DescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $descriptions = ['running', 'basketball', 'hiking', 'cycling', 'fast walking', 'skiing', 'snowboarding', 'tennis',
            'aerobics class', 'football', 'swimming', 'baseball', 'dance', 'soccer', 'gymnastics', 'work', 'other'];

        foreach ($descriptions as $descriptionType) {
            $description = new Description();
            $description->type = $descriptionType;
            $description->save();
        }
    }
}
