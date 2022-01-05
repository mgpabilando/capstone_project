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
            $table->unsignedBigInteger('family_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->integer('age');
            $table->date('bdate');
            $table->string('placeofbirth');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('phil_health_id')->unique();
            $table->string('id_4ps')->unique();
            $table->string('mobile');
            $table->string('purok');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
