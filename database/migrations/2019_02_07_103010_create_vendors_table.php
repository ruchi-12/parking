<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('email');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->integer('status')->nullable();
            // $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
}
