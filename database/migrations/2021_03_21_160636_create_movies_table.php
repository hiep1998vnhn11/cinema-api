<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('name');
            $table->integer('minutes');
            $table->date('releaseDate');
            $table->string('category');
            $table->integer('status');
            $table->text('image');
            $table->integer('pointIMDB  ');
            $table->integer('age');
            $table->string('type');
            $table->string('directors');
            $table->text('cast');
            $table->string('nation');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
