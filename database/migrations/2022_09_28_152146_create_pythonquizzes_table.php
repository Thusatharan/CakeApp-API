<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePythonquizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pythonquizzes', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->string('correct_answer');
            $table->integer('points');
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
        Schema::dropIfExists('pythonquizzes');
    }
}
