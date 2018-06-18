<?php

use Illuminate\Database\Seeder;

class CategoryFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_film')->insert([
            [
                'id' => 1,
                'category' => 1,
                'film' => 1
            ],
            [
                'id' => 2,
                'category' => 11,
                'film' => 1
            ],
            [
                'id' => 3,
                'category' => 11,
                'film' => 1
            ],
            [
                'id' => 4,
                'category' => 1,
                'film' => 2
            ],
            [
                'id' => 5,
                'category' => 2,
                'film' => 2
            ],
            [
                'id' => 6,
                'category' => 11,
                'film' => 2
            ],
            [
                'id' => 7,
                'category' => 9,
                'film' => 3
            ],
            [
                'id' => 8,
                'category' => 4,
                'film' => 4
            ],
            [
                'id' => 9,
                'category' => 1,
                'film' => 5
            ],
            [
                'id' => 10,
                'category' => 10,
                'film' => 6
            ]
        ]);
    }
}
