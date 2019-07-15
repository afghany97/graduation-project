<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('assistant_id');

            $table->unique(['user_id', 'subject_id']);

            foreach (config('questionnaires') as $key => $array){

                foreach ($array as $item){

                    if($key == 'others')

                        $table->string($item)->nullable();

                    else

                        $table->integer($item);
                }
            }
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
        Schema::dropIfExists('questionnaires');
    }
}
