<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_organization', function (Blueprint $table) {
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('organization_id');

            // LLAVES FORANEAS
            $table->foreign('contact_id')->references('id')->on('contacts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_organization');
    }
}
