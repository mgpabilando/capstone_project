<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregnancyConsulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnancy_consul', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('resident_id')->nullable();
            $table->string('name');
            $table->bigInteger('age');
            $table->string('pregnancyorder');
            $table->date('lmp');
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
        Schema::dropIfExists('pregnancy_consul');
    }
}
