<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airport_airlines', function (Blueprint $table) {
            $table->unsignedBigInteger('airport_id');
            $table->unsignedBigInteger('airline_id');

            $table->foreign('airport_id')->references('id')->on('airports');
            $table->foreign('airline_id')->references('id')->on('airlines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airport_airlines');
    }
}
