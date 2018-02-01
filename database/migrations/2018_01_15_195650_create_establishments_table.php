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
            $table->string('image');
            $table->string('dti_permit');
            $table->integer('user_id')->unsigned();
            $table->string('status');

            $table->timestamps();
            $table->foreign('establishment_type_id')->references('id')->on('establishment_types');

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
