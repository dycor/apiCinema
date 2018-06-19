<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('director')->insert([
            [
                'id' => 1,
                'firstname' => 'Joss',
                'lastname' => 'Whedon',
                'nationality' => 'Américain',
                'birthdate' => '1964-06-23',
                'biography' => 'Joss Whedon est un producteur, réalisateur et scénariste américain né le 23 juin 1964 à New York.'
            ],
            [
                'id' => 2,
                'firstname' => 'David',
                'lastname' => 'Leitch',
                'nationality' => 'Américain',
                'birthdate' => '1975-09-13',
                'biography' => 'David Leitch débute sa carrière de cascadeur au milieu des années 1990 dans des séries télévisées comme Sept à la maison, Ally McBeal ou encore Buffy contre les vampires.'
            ]
        ]);
    }
}
