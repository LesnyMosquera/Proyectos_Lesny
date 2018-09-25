@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')
<center><h2>Lista de perfiles</h2></center><br>
<a href="{{ route('perfil.create') }}" onclick="return confirm('Desea crear un nuevo perfil?')" class="btn btn-info">Crear perfil</a><p>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Codigo</th>
			<th>Perfil</th>
			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($perfil as $dato)

		<tr>
			
			<td>{{ $dato->id }}</td>
			<td>{{ $dato->Perfil}}</td>
			
			<th style="text-align:right"><span><a href="{{route('perfil.edit',$dato->id)}}" onclick="return confirm('Está seguro que desea editar el perfil?')" class="glyphicon glyphicon-pencil"></span></a></th>
			
			<th style="text-align:right"><span><a href="{{route('admin.eliminar',$dato->id)}}" onclick="return confirm('Está seguro que desea eliminar el perfil?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $perfil->render() }}</center>

	@endsection