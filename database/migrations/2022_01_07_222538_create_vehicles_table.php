<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('vehiclekey')->unique();
            $table->string('model')->nullable();
            $table->string('plates')->nullable();
            $table->string('mark')->nullable();
            $table->string('motor')->nullable();
            $table->string('chassis')->nullable();
            $table->string('color')->nullable();
            $table->string('invoicenumber')->nullable();
            $table->string('trafficcard')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
