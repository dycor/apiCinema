<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('languageShowing');
            $table->string('schedule');
            $table->string('day');
            $table->integer('idCinema')->unsigned();
            $table->foreign('idCinema')->references('id')->on('cinema');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showing');
    }
}
