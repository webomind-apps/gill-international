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
        Schema::create('group_vacation_faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_vacation_id')->constrained('group_vacations')->onDelete('cascade');
            $table->text('question');
            $table->text('answer');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('group_vacation_faqs');
    }
};
