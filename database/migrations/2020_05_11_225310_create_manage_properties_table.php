<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_properties', function (Blueprint $table) {
            $table->id();
            $table->string ('propertyDescription');
            $table->string ('numberOfUnits');
            $table->string ('address');
            $table->string ('phoneNumber');
            $table->string ('propertyManager');
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
        Schema::dropIfExists('manage_properties');
    }
}
