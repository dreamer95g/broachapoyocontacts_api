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
            $table->string('cuban_ministry');
            $table->string('representative');
            $table->text('ministerial_focus');
            $table->text('capacitation_resources');
            $table->text('purpose');
            $table->text('resources');
            $table->text('global_opportunities');


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
        Schema::dropIfExists('foreign_missions');
    }
}
