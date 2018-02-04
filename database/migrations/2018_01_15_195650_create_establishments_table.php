<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('establishment_type_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('owner_name');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('business_permit')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('status');

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
        Schema::dropIfExists('establishments');
    }
}
