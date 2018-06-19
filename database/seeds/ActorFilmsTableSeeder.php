<?php

use Illuminate\Database\Seeder;
use APICinema\FilmActor;

class ActorFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            $filmActor = new FilmActor;
            $filmActor->film = rand(1,6);
            $filmActor->actor = $i;
            $filmActor->save();
        }
    }
}
