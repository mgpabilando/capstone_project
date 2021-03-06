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
            $table->string('family_head');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->integer('age');
            $table->date('bdate');
            $table->string('placeofbirth');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('phil_health_id')->unique()->nullable();
            $table->string('id_4ps')->unique()->nullable();
            $table->string('mobile')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('family_id')->references('id')->on('family_numberings')
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
        Schema::dropIfExists('residents');
    }
}
