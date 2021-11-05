<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilynumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familynumber', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purok');
            $table->string('familyhead');
            $table->timestamps();
        });

        // Schema::create('FamilyNo_members', function (Blueprint $table) {
        //     $table->unsignedBigInteger('familynumber');
        //     $table->unsignedBigInteger('resident_id');
        //     $table->string('user_type');

        //     $table->foreign('resident_id')->references('id')->on('residents')
        //         ->onUpdate('cascade')->onDelete('cascade');
        // });
        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familynumber');
    }
}
