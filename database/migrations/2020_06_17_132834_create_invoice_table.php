<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('invoice_id');
            $table->string('tenant_names');
            $table->string('house_type');
            $table->string('house_number');
            $table->string('phone');
            $table->string('email');
            $table->string('account');
            $table->integer('status');
            $table->integer('order_id');
            $table->float('rent');
            $table->float('penalty');
            $table->float('balance');
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
        Schema::dropIfExists('invoice');
    }
}
