<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalScheduleFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('international_schedule_files', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('file_name');
            $table->string('file_description')->nullable();
            $table->string('delete_reason')->nullable();
            $table->string('delete_by')->nullable();
            $table->string('status')->default('1');
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
        Schema::dropIfExists('international_schedule_files');
    }
}
