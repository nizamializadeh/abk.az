<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceServiceTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_service_translates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('place_service_id')->index();
            $table->unsignedInteger('lang_id')->index();
            $table->foreign('place_service_id')->references('id')->on('place_services');
            $table->foreign('lang_id')->references('id')->on('languages');
            $table->string('name');
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
        Schema::dropIfExists('place_service_translates');
    }
}
