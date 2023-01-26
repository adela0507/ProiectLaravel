<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model{
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
            public function down()
        {
            Schema::dropIfExists('clients');
        }

    protected $fillable = [
        'name', 'prenume', 'username','email','oras','strada','tara','nrinreg','tipcard',
    ];
}