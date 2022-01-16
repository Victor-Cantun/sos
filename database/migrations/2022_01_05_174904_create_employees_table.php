<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name');
            $table->string('surnames');
            $table->string('rfc')->nullable();
            $table->string('curp')->nullable();
            $table->string('socialsecurity')->nullable();
            $table->string('email')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('phone')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->string('postalcode')->nullable();            
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('colony')->nullable();            
            $table->string('address')->nullable();

            $table->integer('department')->nullable();
            $table->date('dateadmission')->nullable();
            $table->string('bank')->nullable();
            $table->string('bankaccount')->nullable();
            $table->integer('employment')->nullable();

            $table->string('primary')->nullable();
            $table->string('secondary')->nullable();
            $table->string('degree')->nullable();
            $table->string('mastery')->nullable();
            $table->string('doctorate')->nullable();

            $table->string('tshirt')->nullable();
            $table->string('pans')->nullable();
            $table->string('cap')->nullable();
            $table->string('laceboot')->nullable();
            $table->string('oilboot')->nullable();
            $table->string('rubberboot')->nullable();
            $table->string('overalls')->nullable();
            $table->string('gloves')->nullable();
            $table->string('lenses')->nullable();
            $table->string('jacket')->nullable();
            $table->string('waterproof')->nullable();

            $table->string('birthcertificate')->nullable();
            $table->string('officialidentification')->nullable();
            $table->string('proffofaddress')->nullable();
            $table->string('doc_curp')->nullable();
            $table->string('doc_rfc')->nullable();
            $table->string('doc_socialsecurity')->nullable();

            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('skype')->nullable();
            $table->string('github')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
