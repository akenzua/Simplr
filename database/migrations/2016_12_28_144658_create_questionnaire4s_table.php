<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnaire4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaire4s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('injection');
            $table->text('amount');
            $table->text('invested');
            $table->text('extent');
            $table->text('sought');
            $table->text('type');
            $table->text('offering');
            $table->text('exitstrat');
            $table->text('resources');
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
        Schema::dropIfExists('questionnaire4s');
    }
}
