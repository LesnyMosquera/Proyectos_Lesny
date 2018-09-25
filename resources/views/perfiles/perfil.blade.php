@extends('Plantillas.principal')
@extends('Plantillas.librerias')
@section('cuerpo')

<h1>Crear perfil de usuario</h1>
@include('flash::message')
<div class="panel-body">
{!! Form::open(['route'=>'perfil.store', 'method'=>'post']) !!}

<label for="perfil">Perfil de usuario</label>
	<input type="text" name="perfil" id="perfil" class="form-control form-group"required>
	<input type="submit" value="Guardar" class="btn btn-block btn-primary">


{!!form::close()!!}

</div>
@endsection