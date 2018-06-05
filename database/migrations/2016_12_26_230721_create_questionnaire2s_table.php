<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaire2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire2s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('need');
            $table->text('exist');
            $table->text('current');
            $table->text('satisfy');
            $table->text('differentiate');
            $table->text('intellectual');
            $table->text('whatintellectual');
            $table->text('soughtintellectual');
            $table->text('licence');
            $table->integer('job_id');
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
        Schema::dropIfExists('questionnaire2s');
    }
}
