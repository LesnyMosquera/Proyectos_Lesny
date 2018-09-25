<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod__facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProducto')->unsigned();
            $table->integer('numFactura')->unsigned();
            $table->integer('Cantidad');
            $table->double('Precio',12 ,8);
            $table->text('Observacion');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('numFactura')->references('id')->on('facturas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod__facturas');
    }
}
