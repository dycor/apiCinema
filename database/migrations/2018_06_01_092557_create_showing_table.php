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
            $table->integer('language_showing')->unsigned();
            $table->time('schedule');
            $table->date('day');
            $table->integer('cinema')->unsigned();
            $table->timestamps();

            $table->foreign('cinema')->references('id')->on('cinema');
            $table->foreign('language_showing')->references('id')->on('language');
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
