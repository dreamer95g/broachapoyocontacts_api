<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyForeignMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_foreign_mission', function (Blueprint $table) {
            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('foreign_mission_id');

            // LLAVES FORANEAS
            $table->foreign('agency_id')->references('id')->on('agencies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('foreign_mission_id')->references('id')->on('foreign_missions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agency_foreign_mission');
    }
}
