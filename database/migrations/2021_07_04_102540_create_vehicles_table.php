<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->string('Title');
            $table->string('Distcription');
            $table->integer('Year');
            $table->integer('Millage');
            $table->string('Make');
            $table->string('Fuel_Type');
            $table->integer('Reg_year');
            $table->string('condition');
            $table->integer('Price');
            $table->string('Image');
            $table->string('Location');
            $table->string('Name');
            $table->string('Contact');            
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
        Schema::dropIfExists('vehicles');
    }
}
