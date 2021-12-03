<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tracking_type_id');
            $table->date('date');
            $table->text('observation');
            $table->string('pending_task');
            $table->string('ministerial_activity');
            $table->unsignedBigInteger('contact_id');

            $table->timestamps();
            $table->softDeletes();

            //LLAVES FORANEAS
            $table->foreign('tracking_type_id')->references('id')->on('tracking_types')->onUpdate('cascade');
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
        Schema::dropIfExists('trackings');
    }
}
