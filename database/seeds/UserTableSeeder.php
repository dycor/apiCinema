<?php
use Illuminate\Database\Seeder;
use App\Models\Actor;

class UserTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $actor = new actor;
            $actor->lastname = $faker->lastName;
            $actor->firstname = $faker->firstName;
            $actor->birthdate = $faker->dateTimeThisCentury->format('Y-m-d');
            $actor->nationality = $faker->country;
            $actor->save();
        }
    }
}