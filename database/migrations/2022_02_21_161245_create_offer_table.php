<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->integer('uploader_id');
            $table->string('offer_title');
            $table->string('offer_amount_type');
            $table->string('offer_amount');
            $table->string('offer_route_from');
            $table->string('offer_route_to');
            $table->string('offer_start_day');
            $table->string('offer_end_day');
            $table->string('offer_image');
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
        Schema::dropIfExists('offer');
    }
}
