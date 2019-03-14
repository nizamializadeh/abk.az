<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceWeekdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_weekdays', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('place_id')->index();
            $table->unsignedInteger('weekday_id')->index();
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('weekday_id')->references('id')->on('weekdays');
            $table->string('open_time');

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
        Schema::dropIfExists('place_weekdays');
    }
}
