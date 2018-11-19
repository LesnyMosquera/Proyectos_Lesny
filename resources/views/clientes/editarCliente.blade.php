
@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

  {{--   <form class="well form-horizontal" action=" " method="post"  id="contact_form"> --}}
      {!! Form::open(['route'=>['cliente.update',$dato->id], 'method'=>'put','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend class="btn-primary"><center><h3>Actualizar cliente</h3></center><br>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  @include('flash::message')

</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Cedula o Nit</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nit" id="nit" value="{{ $dato->Nit }}" placeholder="numero de cedula o nit" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre o Empresa</label> 
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nombre" id="nombre" value="{{ $dato->Nombre }}" placeholder="Escriba su nombe o empresa" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Correo</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="correo" id="correo" value="{{ $dato->Correo }}" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Tel&eacutefono</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefono" id="telefono" value="{{ $dato->Telefono }}" placeholder="3112222552" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Direcci&oacuten</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="direccion" id="direccion" value="{{ $dato->Direccion}}" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Ciudad</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="ciudad" id="ciudad" value="{{ $dato->Ciudad }}" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary" >Actualizar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
{!! Form::close() !!} 
</div>

    </div><!-- /.container -->


  @endsection