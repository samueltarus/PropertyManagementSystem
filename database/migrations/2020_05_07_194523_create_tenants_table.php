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
            $table->string ('firstname');
            $table->string ('lastname');
            $table->string ('username');
            $table->integer ('passport');
            $table->string ('email');
            $table->string ('address');
            $table->integer ('phoneNumber');
            $table->string ('occupation');
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
        Schema::dropIfExists('tenants');
    }
}
