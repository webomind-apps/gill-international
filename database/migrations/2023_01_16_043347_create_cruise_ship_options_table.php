<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise_ship_options', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            $table->string('header_title');
            $table->text('header_description');
            $table->string('header_image_1');
            $table->string('header_image_2');
            $table->string('popular_title');
            $table->text('popular_description');
            $table->string('popular_image');
            $table->string('premium_title');
            $table->text('premium_description');
            $table->string('premium_image');
            $table->string('luxury_title');
            $table->text('luxury_description');
            $table->string('luxury_image');
            $table->string('river_cruises_title');
            $table->text('river_cruises_description');
            $table->string('river_cruises_image');
            $table->text('meta_title');
            $table->text('meta_keywords');
            $table->text('meta_description');
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
        Schema::dropIfExists('cruise_ship_options');
    }
};
