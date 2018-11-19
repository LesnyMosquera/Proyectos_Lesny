0  0  dd acc5
@exten   . 0.v0cbv>>Z<xzccvvbnmm,,.-ds('Plantillas.principal')

·xs00000001@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

  {{--   <form class="well form-horizontal" action=" " method="post"  id="contact_form"> --}}
      {!! Form::open(['route'=>'cliente.store', 'method'=>'post','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend>Crear cliente<br>
  
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
 @
 @
 @
@@
@@
@@
@@
@@
@@
@@
@@
@@
@@
@@
@@
@
@phicon-user"></i></span>
@la o nit" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Nombre o Empresa</label> 
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="nombre" id="nombre" placeholder="Escriba su nombe o empresa" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Correo</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="correo" id="correo" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Tel&eacutefono</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefono" id="telefono" placeholder="3112222552" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Direcci&oacuten</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="direccion" id="direccion" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Ciudad</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="ciudad" id="ciudad" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Button -->
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
