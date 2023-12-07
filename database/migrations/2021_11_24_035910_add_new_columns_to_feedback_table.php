<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->string('suggestionType')->after('id');
            $table->string('subject')->after('suggestionType');
            $table->string('description')->after('subject');
            $table->string('name')->after('description');
            $table->string('email')->after('name');
            $table->string('contact')->after('email');
            $table->string('country')->after('contact');
            $table->string('flight')->after('country')->nullable();
            $table->string('from')->after('flight')->nullable();
            $table->string('to')->after('from')->nullable();
            $table->date('journey_date')->after('to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            //
        });
    }
}
