<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {

           

            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->string ('firstname');
            $table->string ('lastname');
            $table->string ('propertyName');
            $table->string ('unitNumber');
            $table->string ('phoneNumber');
            $table->string ('status');
            $table->integer ('rent');
            $table->string ('services');
            $table->timestamps();
            $table->foreign('property_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
