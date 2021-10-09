<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purok', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

         // Create table for associating roles to users and teams (Many To Many Polymorphic)
         Schema::create('purok_members', function (Blueprint $table) {
            $table->unsignedBigInteger('purok_id');
            $table->unsignedBigInteger('resident_id');
            $table->string('user_type');

            $table->foreign('purok_id')->references('id')->on('purok')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['resident_id', 'purok_id', 'user_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purok');
    }
}
