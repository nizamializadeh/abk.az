<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_translates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('property_id')->index();
            $table->unsignedInteger('lang_id')->index();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('lang_id')->references('id')->on('languages');
            $table->string('key');
            $table->string('value');
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
        Schema::dropIfExists('property_translates');
    }
}
