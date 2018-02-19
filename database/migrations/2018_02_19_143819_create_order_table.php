<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user')->unsigned();
            $table->integer('product_order')->unsigned();
            $table->string('deliver_address');
            $table->integer('payment_type')->unsigned();
            $table->dateTime('date_deliver');
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('product_order')->references('id')->on('product_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
