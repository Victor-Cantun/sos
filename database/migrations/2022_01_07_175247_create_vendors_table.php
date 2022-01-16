<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('photo');
            $table->string('rfc')->nullable();
            $table->string('name')->unique();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('colony')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('address')->nullable();
            $table->string('bank')->nullable();
            $table->string('bankaccount')->nullable();
            $table->string('interbankaccount')->nullable();
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
