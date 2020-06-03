<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_houses', function (Blueprint $table) {
           
            
            $table->id();
            $table->string('property_name');
            $table->string('house_number');
            $table->integer('predifened_monthly_rent');
            $table->string('tenant_ID');
            $table->string('tenant_name');
            $table->integer('deposit');
            $table->integer('rent_paid');
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
        Schema::dropIfExists('assign_houses');
    }
}
