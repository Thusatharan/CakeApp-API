<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('object');
            $table->string('bin_longitude');
            $table->string('bin_latitude');
            $table->string('bin_level');
            $table->boolean('is_gas');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbots');
    }
}
