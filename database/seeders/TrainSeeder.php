<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->company = $faker->randomElement(['trenitalia', 'italo', 'tgv', 'obb']) ;
            $train->departure_station = $faker->city() ;
            $train->arrival_station = $faker->city() ;
            $train->departure_time = $faker->time() ;
            $train->arrival_time = $faker->time() ;
            $train->train_code = $faker->numberBetween(00000, 50000) ;
            $train->total_carriages = $faker->numberBetween(1, 100) ;
            $train->in_time = $faker->boolean() ;
            $train->cancelled = $faker->boolean() ;


        }
    }
}
