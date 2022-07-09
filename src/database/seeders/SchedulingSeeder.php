<?php

namespace Database\Seeders;

use App\Models\Scheduling;
use Illuminate\Database\Seeder;

class SchedulingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 20; $i++) { 
            Scheduling::create([
                'datetime' => $faker->dateTime('now'), 
                'service' => $faker->word(), 
                'name' => $faker->name(), 
                'phone' => $faker->tollFreePhoneNumber()
            ]);
        }
    }
}
