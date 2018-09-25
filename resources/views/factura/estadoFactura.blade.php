@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

 
      {!! Form::open(['route'=>'estadoFactura.store', 'method'=>'post','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend>Estado de factura<br>
  @include('flash::message')

</legend>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Estado de factura</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input  name="estado" id="estado" placeholder="Ingrese el estado de la factura" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning" >Guardar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
{!! Form::close() !!} 
</div>

    </div><!-- /.container -->


  @endsection
