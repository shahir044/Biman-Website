<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('international_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('flightNo');
            $table->string('route');
            $table->string('days');
            $table->string('departure');
            $table->string('arrival');
            $table->string('aircraft');
            $table->string('status');
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
        Schema::dropIfExists('international_schedules');
    }
}
