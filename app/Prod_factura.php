<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prod_factura extends Model
{
  protected $table='prod__facturas';
    protected $fillable['idProducto','numFactura','Cantidad','Precio','Observacion'];
}
