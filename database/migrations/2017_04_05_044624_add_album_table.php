<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('albums', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->default('');
        $table->integer('year')->default(0);
        $table->string('artist')->default('');
        $table->string('numberOfSongs')->default('');
        $table->integer('billboardRank')->default(0);
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
      Schema::dropIfExists('albums');
        //
    }
}
