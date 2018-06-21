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
        [
          'id' => 1,
          'language_showing' => '1',
          'schedule' => '17:00',
          'day'=>'2018-06-23',
          'cinema'=> '1',
          'film'=>'1'
        ],
        [
          'id' => 2,
          'language_showing' => '1',
          'schedule' => '19:00',
          'day'=>'2018-06-23',
          'cinema'=> '1',
          'film'=>'1'
        ],
        [
          'id' => 3,
          'language_showing' => '2',
          'schedule' => '21:00',
          'day'=>'2018-06-20',
          'cinema'=> '1',
          'film'=>'2'
        ],
        [
          'id' => 4,
          'language_showing' => '2',
          'schedule' => '21:00',
          'day'=>'2018-06-23',
          'cinema'=> '1',
          'film'=>'2'

        ],
        [
            'id' => 5,
            'language_showing' => '2',
            'schedule' => '16:40',
            'day'=>'2018-06-04',
            'cinema'=> '1',
            'film'=>'3'
          ],
          [
              'id' =>6 ,
              'language_showing' => '1',
              'schedule' => '14:20',
              'day'=>'2017-12-12',
              'cinema'=> '1',
              'film'=>'1'
            ],
            [
                'id' =>7 ,
                'language_showing' => '1',
                'schedule' => '14:20',
                'day'=>'2017-10-10',
                'cinema'=> '1',
                'film'=>'2'
              ]]);

    }
}
