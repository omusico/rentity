<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{

    public function up()
    {

        Schema::create('properties', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->string('LeaseTerm');
            $table->integer('price');
            $table->date('available');
            $table->string('type');
            $table->integer('beds');
            $table->integer('baths');
            $table->string('pets');
            $table->string('amenities');
            $table->string('cover');

            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::drop('properties');
    }
}
