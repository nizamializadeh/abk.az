<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekdayTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekday_translates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lang_id')->index();
            $table->unsignedInteger('weekday_id')->index();
            $table->foreign('lang_id')->references('id')->on('languages');
            $table->foreign('weekday_id')->references('id')->on('weekdays');
            $table->string('name');

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
        Schema::dropIfExists('weekday_translates');
    }
}
