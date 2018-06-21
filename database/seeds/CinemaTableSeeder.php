<?php

use Illuminate\Database\Seeder;

class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('cinema')->insert([
        /*[
          'id' => 1,
          'cinemaName' => 'UGC Les Halles',
          'city' => 'Paris -Chatelet ',
          'adress'=>'7 place De La Rotonde Forum Des Halles',
          'postcode'=> '75001'
        ],*/
        [
          'id' => 2,
          'cinemaName' => 'MK2 BIBLIOTHÈQUE',
          'city' => 'Paris 13e arrondissement',
          'adress'=>'162 avenue de France',
          'postcode'=> '75013'
        ],
        [
          'id' => 3,
          'cinemaName' => 'UGC Ciné Cité Bercy',
          'city' => 'Paris 13e arrondissement',
          'adress'=>'162 avenue de France',
          'postcode'=> '75012 '
        ],
        [
          'id' => 4,
          'cinemaName' => 'UGC Ciné Cité Bercy',
          'city' => 'Paris 13e arrondissement',
          'adress'=>'162 avenue de France',
          'postcode'=> '75012 '
        ],
        [
          'id' => 5,
          'cinemaName' => 'Le Grand Rex',
          'city' => 'Paris 2eme arrondissement',
          'adress'=>'1 Boulevard Poissonnière',
          'postcode'=> '75002 '
        ],
        [
            'id' => 6,
            'cinemaName' => 'UGC GEORGE V',
            'city' => 'Paris 8e arrondissement',
            'adress'=>'144-146, avenue des Champs-Elysées',
            'postcode'=> '75008'
        ]]);
    }
}
