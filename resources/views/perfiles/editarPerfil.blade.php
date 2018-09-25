@extends('Plantillas.principal')
@extends('Plantillas.librerias')
@section('cuerpo')

<h1><center>Editar perfil de usuario</center></h1>

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
<div class="panel-body">
{!! Form::model($perfil, ['route'=>['perfil.update', $perfil->id], 'method'=>'PUT']) !!}


<label for="Perfil">Perfil de usuario</label>
	
	{!! form::text('Perfil',null, ['class'=>'form-control form-group', 'required']) !!}
	{!! form::submit('Actualizar',['class'=>'btn btn-block btn-primary']) !!}
	{{-- <input type="submit" value="Actualizar" class="btn btn-block btn-primary"> --}}


{!!form::close()!!}

</div>
@endsection