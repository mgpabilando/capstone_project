<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthconsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthconsultation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('resident_id');
            $table->float('weight_kg');
            $table->float('height_cm');
            $table->date('lmp');
            $table->string('consultation_type');
            $table->text('complains')->nullable();
            $table->text('findings');
            $table->text('diagnosis');
            $table->text('treatment');
            $table->rememberToken();
            $table->timestamps();

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
        Schema::dropIfExists('healthconsultation');
    }
}
