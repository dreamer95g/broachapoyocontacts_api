<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_missions', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('place');
            $table->text('purpose');
            $table->text('additional_note');
            //este es el representante
            //que a su vez es un contacto
            $table->text('ministerial_focus');
            $table->text('capacitation_resources');
            $table->text('resources');
            $table->text('global_opportunities');
            //los candidatos a misioneros estan
            //en el n*n con contactos

            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('contact_id')->references('id')->on('contacts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_missions');
    }
}
