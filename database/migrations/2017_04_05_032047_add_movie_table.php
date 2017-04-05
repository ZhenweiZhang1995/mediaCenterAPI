<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMovieTable extends Migration
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
        $table->string('name')->default('');
        $table->integer('year')->default(0);
        $table->integer('length')->default(0);
        $table->string('director')->default('');
        $table->string('company')->default('');  // Production company
        $table->string('language')->default('');
        $table->string('country')->default('');
        $table->float('IMDBrating', 8, 2)->default(0.00);
        $table->string('budget')->default('');
        $table->string('boxOffice')->default('');
        $table->timestamps();
      });
        //
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
