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
            $table->string('dni');
            $table->string('phone');
            $table->string('email');
            $table->text('family');
            $table->string('place');
            $table->string('ministerial_area');
            $table->text('description');
            $table->text('commitment');
            $table->text('profession');
            $table->text('vocational_category');
            $table->text('ministerial_passion');
            $table->text('interest_group');
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
