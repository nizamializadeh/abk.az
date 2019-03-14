<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_translates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('place_id')->index();
            $table->unsignedInteger('lang_id')->index();
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('lang_id')->references('id')->on('languages');
            $table->string('location');
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
        Schema::dropIfExists('place_translates');
    }
}
