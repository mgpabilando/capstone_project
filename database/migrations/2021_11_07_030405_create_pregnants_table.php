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
            $table->unsignedBigInteger('resident_id');
            $table->string('name');
            $table->integer('age');
            $table->float('height_cm');
            $table->float('weight_kg');
            $table->string('lmp');
            $table->string('pregnancyorder');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('resident_id')->references('id')->on('residents')
                ->onUpdate('cascade')->onDelete('cascade');
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
