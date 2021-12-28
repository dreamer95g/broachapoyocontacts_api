<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_image', function (Blueprint $table) {
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('contact_id');

            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_image');
    }
}
