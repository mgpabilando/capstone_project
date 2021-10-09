<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('family_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->integer('age');
            $table->date('bdate');
            $table->string('placeofbirth');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('phil_health_id');
            $table->string('4ps_id');
            $table->string('mobile');
            $table->string('purok');
            $table->rememberToken();
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
        Schema::dropIfExists('residents');
    }
}
