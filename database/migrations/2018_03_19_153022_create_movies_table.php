<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('path');
            $table->string('cast');
            $table->string('direction');
            $table->string('duration');
            $table->integer('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
