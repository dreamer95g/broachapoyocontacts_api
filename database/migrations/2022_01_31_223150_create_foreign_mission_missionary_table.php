<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignMissionMissionaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_mission_missionary', function (Blueprint $table) {
             $table->unsignedBigInteger('missionary_id');
            $table->unsignedBigInteger('foreign_mission_id');

            // LLAVES FORANEAS
            $table->foreign('missionary_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('foreign_mission_id')->references('id')->on('foreign_missions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_mission_missionary');
    }
}
