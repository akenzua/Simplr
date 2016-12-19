<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('business');
            $table->string('industry');
            $table->string('location');
            $table->string('registration');
            $table->string('startup');
            $table->string('service');
            $table->string('category');
            $table->string('payfirst');
            $table->string('paylast');
            $table->integer('user_id')->unsigned()->index();;
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
        Schema::dropIfExists('jobs');
    }
}
