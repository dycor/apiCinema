<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(CategoryFilmsTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(ActorFilmsTableSeeder::class);
    }
}
