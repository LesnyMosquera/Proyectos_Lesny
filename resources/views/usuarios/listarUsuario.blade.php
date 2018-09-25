@extends('Plantillas.principal')
@include('Plantillas.librerias')

@section('cuerpo')
{{-- <p>
<h1 class="btn-primary"><center>Lista de usuarios del sistema</center></h1>
<p>
	<a href="{{ route('register') }}" onclick="return confirm('Desea crear un nuevo perfil?')" class="btn btn-info">Crear Usuario</a><p>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Contraseña</th>
			<th>Perfil</th>

			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($perfil as $dato)

		<tr>
			
			<td>{{ $dato->id }}</td>
			<td>{{ $dato->name}}</td>
			<td>{{ $dato->password}}</td>
			<td>{{ $dato->Perfil}}</td>
			
			<th style="text-align:right"><span><a href="{{route('perfil.edit',$dato->id)}}"  class="glyphicon glyphicon-pencil"></span></a></th>
			
			<th style="text-align:right"><span><a href="{{route('admin.eliminar',$dato->id)}}" onclick="return confirm('Está seguro que desea eliminar el perfil?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $dato->render() }}</center> --}}
@endsection