<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id_client');
            $table->string("name", 255)->nullable();
            $table->string("prenume", 255)->nullable();
            $table->string("username", 255)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("oras", 255)->nullable();
            $table->string("strada", 255)->nullable();
            $table->string("tara", 255)->nullable();
            $table->string("nrinreg", 255)->nullable();
            $table->string("tipcard", 255)->nullable();


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
        Schema::dropIfExists('clients');
    }
}
