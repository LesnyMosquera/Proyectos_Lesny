
@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')


<div class="container">

  {{--   <form class="well form-horizontal" action=" " method="post"  id="contact_form"> --}}
      {!! Form::open(['route'=>'factura.store', 'method'=>'post','class'=>'well form-horizontal']) !!}
<fieldset>

<!-- Form Name -->
<legend>Crear factura<br>
  
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
  <label class="col-md-4 control-label">Numero</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
  <input  name="Numero_fac" id="numero" placeholder="numero de factura" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Detalles</label> 
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
  <textarea name="Detalles" id="Detalles" cols="46" rows="6"></textarea>
 
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Cliente</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {!! form::select('idCliente', $cliente, null, ['class'=>'form-control']) !!}
 
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
    <label class="col-md-4 control-label">Forma de pago</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
        {!! form::select('idFormaPago', $formaPago, null, ['class'=>'form-control', 'id'=>'forma']) !!}

    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Estado de factura</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
  {!!form::select('idEstadoFactura', $estadoFactura, null, ['class'=>'form-control'])!!}
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Adjuntar</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
  <input type="file" class="form-control" name="CopiaFactura">
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
