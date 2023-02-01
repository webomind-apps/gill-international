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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('banner');
            //destination wedding section 1
            $table->string('destination_wedding_title');
            $table->string('destination_wedding_image');
            $table->text('destination_wedding_description');
            //destination wedding section 2
            $table->string('destination_wedding_form_title');
            $table->text('destination_wedding_form_description');
            $table->string('destination_wedding_form_image');
            //destination wedding section 3
            $table->string('destination_wedding_plan_title');
            $table->string('destination_wedding_plan_image');
            $table->text('destination_wedding_plan_description');
            //about section
            $table->string('about_title');
            $table->string('about_image');
            $table->text('about_description');
            //gift  registry section
            $table->string('gift_registry_title');
            $table->string('gift_registry_image');
            $table->text('gift_registry_description');
            //Easy registration
            $table->string('easy_registration_title');
            $table->string('easy_registration_image');
            $table->text('easy_registration_description');
            //Buying process 
            $table->string('buying_process_title');
            $table->string('buying_process_image');
            $table->text('buying_process_description');
            //Gift cards
            $table->string('gift_card_title');
            $table->string('gift_card_image');
            $table->text('gift_card_description');
            //let your guests know
            $table->string('guest_title');
            $table->string('guest_image');
            $table->text('guest_description');
            //advantage of destination wedding
            $table->string('advantage_title');
            $table->string('advantage_image');
            $table->text('advantage_description');
            //meta details
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
        Schema::dropIfExists('weddings');
    }
};
