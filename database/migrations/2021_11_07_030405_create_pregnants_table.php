<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregnantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resident_id');
            $table->string('res_name');
            $table->integer('res_age');
            $table->string('lmp');
            $table->string('pregnancyorder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregnants');
    }
}
