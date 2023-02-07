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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            $table->text('about_us_title');
            $table->text('about_us_description');
            $table->text('about_us_image');
            $table->text('read_more_title');
            $table->text('read_more_image');
            $table->text('read_more_description');
            $table->text('read_more_link');
            $table->string('special_offer_banner_1');
            $table->string('special_offer_banner_2');
            $table->string('new_letter_image');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
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
        Schema::dropIfExists('homes');
    }
};
