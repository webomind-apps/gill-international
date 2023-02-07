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
        Schema::create('cruise_vacations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            $table->text('section_1_title');
            $table->text('section_1_image');
            $table->text('section_1_description');
            $table->text('section_2_title');
            $table->text('section_2_image');
            $table->text('section_2_description');
            $table->text('section_3_title');
            $table->text('section_3_image');
            $table->text('section_3_description');
            $table->text('section_4_title');
            $table->text('section_4_image');
            $table->text('section_4_description');
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
        Schema::dropIfExists('cruise_vacations');
    }
};

