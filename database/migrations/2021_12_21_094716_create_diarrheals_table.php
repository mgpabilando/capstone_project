<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiarrhealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarrheals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('resident_id');
            $table->string('name');
            $table->integer('age');
            $table->string('temp')->nullable();
            $table->string('bp')->nullable();
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
        Schema::dropIfExists('diarrheals');
    }
}
