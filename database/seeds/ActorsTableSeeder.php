<?php

use Illuminate\Database\Seeder;
use APICinema\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $actor = new Actor;
            $actor->lastName = $faker->lastName;
            $actor->firstName = $faker->firstName;
            $actor->nationality = 'Américain';
            $actor->biography = $faker->paragraph($nbSentences = 2, $variableNbSentences = true);
            $actor->birthdate = $faker->dateTimeThisCentury->format('Y-m-d');
            $actor->save();
        }
    }
}
