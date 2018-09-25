@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

 
      {!! Form::open(['route'=>'producto.store', 'method'=>'post','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend>Crear Producto<br>
  @include('flash::message')

</legend>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Producto</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
  <input  name="producto" id="producto" placeholder="Ingrese el nombre del producto" class="form-control"  type="text">
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
