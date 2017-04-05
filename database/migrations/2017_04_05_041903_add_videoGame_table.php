<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideoGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('videoGames', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->default('');
        $table->integer('year')->default(0);
        $table->string('genre')->default('');
        $table->string('platforms')->default('');
        $table->string('developer')->default('');
        $table->string('publisher')->default('');
        $table->float('IGNrate', 8, 2)->default(0.0);
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
        Schema::dropIfExists('videoGames');
    }
}
