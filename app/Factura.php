<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='facturas';
    protected $fillable=['Numero_fac','Detalles','idCliente','idFormaPago','idEstadoFactura','CopiaFactura'];
}
