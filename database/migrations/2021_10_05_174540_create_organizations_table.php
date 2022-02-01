<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //aki van los representantes
            //pueden estar vacios
            //esta en el n*n con contacto
            $table->text('purpose');
            $table->string('phone');
            $table->string('email');
            $table->string('place');
            $table->text('resources');
            $table->text('relationship');

            $table->timestamps();
             $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
