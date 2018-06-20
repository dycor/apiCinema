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

        ]]);

    }
}
