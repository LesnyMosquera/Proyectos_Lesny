@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')
<center><h2>Lista de estados de facturas</h2></center><br>
<a href="{{ route('estadoFactura.create') }}" onclick="return confirm('Desea crear un nuevo estado?')" class="btn btn-info">Crear estado</a><p>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Codigo</th>
			<th>Perfil</th>
			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($estadofactura as $dato)

		<tr>
			
			<td>{{ $dato->id }}</td>
			<td>{{ $dato->Estado}}</td>
			
			<th style="text-align:right"><span><a href=""  class="glyphicon glyphicon-pencil"></span></a></th>
			
			<th style="text-align:right"><span><a href="" onclick="return confirm('Está seguro que desea eliminar el estado '{{$dato->Estado}}' ?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $estadofactura->render() }}</center>

	@endsection