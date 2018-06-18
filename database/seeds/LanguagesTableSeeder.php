<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language')->insert([
            'id' => 1,
            'languageName' => 'VOSTFR'
        ],
        [
            'id' => 2,
            'languageName' = 'VF'
        ]
        );
    }
    }
}
