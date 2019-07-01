<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_assistants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


        Schema::create('subject_teaching_assistant', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teaching_assistant_id')->references('id')->on('teaching_assistants')->onDelete('cascade');
            $table->unsignedInteger('subject_id')->references('id')->on('subjects')->onDelete('cascade');
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
        Schema::dropIfExists('subject_teaching_assistant');
        Schema::dropIfExists('teaching_assistants');
    }
}
