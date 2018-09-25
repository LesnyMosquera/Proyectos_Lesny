<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Numero_fac')->unique();
            $table->text('Detalles');
            $table->integer('idCliente')->unsigned();   
            $table->integer('idFormaPago')->unsigned(); 
            $table->integer('idEstadoFactura')->unsigned(); 

            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('idFormaPago')->references('id')->on('forma_pagos')->onDelete('cascade');
            $table->foreign('idEstadoFactura')->references('id')->on('estado_facturas')->onDelete('cascade');
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
        Schema::dropIfExists('facturas');
    }
}
