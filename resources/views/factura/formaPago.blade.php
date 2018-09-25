@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

 
      {!! Form::open(['route'=>'formaPago.store', 'method'=>'post','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend>Crear forma de pago<br>
  @include('flash::message')

</legend>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Forma de pago</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
  <input  name="pago" id="pago" placeholder="Ingrese la forma de pago" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary" >Guardar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
{!! Form::close() !!} 
</div>

    </div><!-- /.container -->


  @endsection
