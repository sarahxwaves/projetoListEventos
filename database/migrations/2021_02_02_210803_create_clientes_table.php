<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();            
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('usuario')->unique();
            $table->string('senha')->unique();
            $table->string('confirmsenha')->unique();            
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
        Schema::dropIfExists('clientes');
    }
}
