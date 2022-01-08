<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMorningDtrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morning_dtrs', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('Arrival');
            $table->datetime('Departure')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')

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
        Schema::dropIfExists('morning_dtrs');
    }
}
