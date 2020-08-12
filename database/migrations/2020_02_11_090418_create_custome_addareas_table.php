<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomeAddareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custome_addareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('areaname');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('neararea');
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
        Schema::dropIfExists('custome_addareas');
    }
}
