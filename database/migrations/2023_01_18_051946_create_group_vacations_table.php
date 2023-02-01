<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_vacations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            $table->string('group_travel_title');
            $table->string('group_travel_image');
            $table->text('group_travel_description');
            $table->string('about_us_title');
            $table->string('about_us_image');
            $table->text('about_us_description');
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
        Schema::dropIfExists('group_vacations');
    }
};
