<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {


            $table->id();
            
            $table->string ('propertyName');
            $table->string ('apartmentsType');
            $table->string('townLocation');
            $table->string('location');
            $table->string ('propertyDescription');
            $table->string ('username');
            $table->integer('managementFee');
           
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
        Schema::dropIfExists('properties');
    }
}
