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
            $table->string ('propertyType');
            $table->string ('propertyDescription');
            $table->string ('numberOfUnits');
            $table->string ('address');
            $table->string ('phoneNumber');
            $table->string ('propertyManager');
            $table->string ('propertyMonthlyRev');
            $table->string ('propertyAnnualized');
             $table->timestamps();
             
        });
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
