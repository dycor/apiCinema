<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([
            [
                'id' => 1,
                'categoryName' => 'Action'
            ],
            [
                'id' => 2,
                'categoryName' => 'Comédie'
            ],
            [
                'id' => 3,
                'categoryName' => 'Documentaires'
            ],
            [
                'id' => 4,
                'categoryName' => 'Drame'
            ],
            [
                'id' => 5,
                'categoryName' => 'Horreur'
            ],
            [
                'id' => 6,
                'categoryName' => 'Comédies musicales'
            ],
            [
                'id' => 7,
                'categoryName' => 'Policier'
            ],
            [
                'id' => 8,
                'categoryName' => 'Romance'
            ],
            [
                'id' => 9,
                'categoryName' => 'SF et fantastique'
            ],
            [
                'id' => 10,
                'categoryName' => 'Thriller'
            ],
            [
                'id' => 11,
                'categoryName' => 'Aventure'
            ]
        ]);
    }
}
