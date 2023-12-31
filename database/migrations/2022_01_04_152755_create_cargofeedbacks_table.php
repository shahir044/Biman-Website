<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargofeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargofeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('suggestionType');
            $table->string('subject');
            $table->string('description');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('freightAgent');
            $table->string('flight');
            $table->string('from');
            $table->string('to');
            $table->date('journey_date');
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
        Schema::dropIfExists('cargofeedbacks');
    }
}
