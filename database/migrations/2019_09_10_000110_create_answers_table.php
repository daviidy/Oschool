<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('option_id')->unsigned()->nullable();
            $table->foreign('option_id')->references('id')->on('options');
            $table->bigInteger('result_id')->unsigned()->nullable();
            $table->foreign('result_id')->references('id')->on('results');
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->tinyInteger('correct')->default(0);
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
        Schema::dropIfExists('answers');
    }
}
