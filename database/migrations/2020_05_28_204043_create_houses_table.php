<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('property_id')->index()->nullable();
            $table->foreign('property_id')->references('property_id')->on('properties')->onDelete('cascade')->onUpdate('cascade');
            $table->string('property_name');
            $table->string('house_number');
            $table->string('house_type');
            $table->string('monthly_rent');
            $table->integer('house_status');
            
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
        Schema::dropIfExists('houses');
    }
}
