<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dni')->unique();
            // $table->string('personal_photo');
            $table->string('phone');
            $table->string('email')->unique();
            $table->text('family');
            // $table->string('family_photo');
            $table->string('place');
            $table->string('ministerial_area');
            $table->text('description');
            $table->string('additional_note');
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
        Schema::dropIfExists('contacts');
    }
}
