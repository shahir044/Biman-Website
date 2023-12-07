<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromToAirportTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('from_airport_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_name');
            $table->string('airport_name');
            $table->string('iata_code');
            $table->string('country');
            $table->timestamps();
        });

        Schema::create('to_airport_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_name');
            $table->string('airport_name');
            $table->string('iata_code');
            $table->string('country');
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
        Schema::dropIfExists('from_airport_tables');
        Schema::dropIfExists('to_airport_tables');
    }
}
