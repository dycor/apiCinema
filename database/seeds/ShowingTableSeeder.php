<?php

use Illuminate\Database\Seeder;

class ShowingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('showing')->insert([
        [   //Les Avengers
          'id' => 1,
          'language_showing' => '1',
          'schedule' => '17:00',
          'day'=>'2018-07-23',
          'cinema'=> '1',
          'film'=>'1'
        ],
        [
          'id' => 2,
          'language_showing' => '1',
          'schedule' => '19:00',
          'day'=>'2018-07-23',
          'cinema'=> '1',
          'film'=>'1'
        ],
        [    //DEADPOOL
          'id' => 3,
          'language_showing' => '2',
          'schedule' => '21:00',
          'day'=>'2018-07-20',
          'cinema'=> '1',
          'film'=>'2'
        ],
        [
          'id' => 4,
          'language_showing' => '2',
          'schedule' => '21:00',
          'day'=>'2018-07-23',
          'cinema'=> '1',
          'film'=>'2'

        ],
        [   //Justice League
            'id' => 5,
            'language_showing' => '2',
            'schedule' => '16:40',
            'day'=>'2018-07-04',
            'cinema'=> '1',
            'film'=>'3'
          ],
          [
              'id' =>6 ,
              'language_showing' => '1',
              'schedule' => '14:20',
              'day'=>'2018-07-07',
              'cinema'=> '1',
              'film'=>'3'
            ],
            [
                'id' =>7 ,
                'language_showing' => '2',
                'schedule' => '11:00',
                'day'=>'2018-07-19',
                'cinema'=> '3',
                'film'=>'3'
            ],
            [  //Much Ado About Nothing
                'id' => 8,
                'language_showing' => '2',
                'schedule' => '13:30',
                'day'=>'2018-07-27',
                'cinema'=> '3',
                'film'=> '4'
            ],
            [
                'id' =>9 ,
                'language_showing' => '1',
                'schedule' => '14:20',
                'day'=>'2018-07-07',
                'cinema'=> '1',
                'film'=>'4'
            ],
            [
                'id' =>10 ,
                'language_showing' => '1',
                'schedule' => '19:20',
                'day'=>'2018-07-06',
                'cinema'=> '1',
                'film'=>'4'
            ],
            [//John Wick
                'id' =>11,
                'language_showing' => '1',
                'schedule' => '20:40',
                'day'=>'2018-07-07',
                'cinema'=> '1',
                'film'=>'5'
            ],
            [
                'id' =>12 ,
                'language_showing' => '1',
                'schedule' => '18:30',
                'day'=>'2018-07-16',
                'cinema'=> '4',
                'film'=>'5'
            ],
            [
                'id' =>13,
                'language_showing' => '1',
                'schedule' => '17:20',
                'day'=>'2018-07-03',
                'cinema'=> '3',
                'film'=>'5'
            ]]);

    }
}
