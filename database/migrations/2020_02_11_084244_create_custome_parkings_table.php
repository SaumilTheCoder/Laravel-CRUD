<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomeParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custome_parkings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fourwheeler');
            $table->string('twowheeler');
            $table->string('tempo');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('areaname');
            $table->string('parkingname');
            $table->string('image1');
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
        Schema::dropIfExists('custome_parkings');
    }
}
