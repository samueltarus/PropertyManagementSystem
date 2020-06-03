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
            
            $table->string ('property_name');
            $table->string ('apartments_type');
            $table->string('county');
            $table->string('town');
            $table->string('location');
            $table->string ('property_description');
            $table->string ('username');
            $table->integer('management_fee');
           
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
