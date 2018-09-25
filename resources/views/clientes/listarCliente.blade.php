@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')
<center><h2>Lista de clientes registrado</h2></center>
<br>
<a href="{{ route('cliente.create') }}" onclick="return confirm('Desea crear un nuevo cliente?')" class="btn btn-info">Agregar Cliente</a><p>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Nit/cedula</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Direci&oacuten</th>
			<th>Tel&eacutefono</th>
			<th>Ciudad</th>
			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($cliente as $dato)

		<tr>
			
			<td>{{ $dato->Nit }}</td>
			<td>{{ $dato->Nombre }}</td>
			<td>{{ $dato->Correo }}</td>
			<td>{{ $dato->Direccion}}</td>
			<td>{{ $dato->Telefono }}</td>
			<td>{{ $dato->Ciudad }}</td>
			<th style="text-align:center"><span><a href="{{ route('cliente.edit',$dato->id) }}"  class="glyphicon glyphicon-pencil"></span></a></th>
			<th style="text-align:center"><span><a href="{{ route('admin.eliminarCliente', $dato->id) }}" onclick="return confirm('Está seguro que desea eliminar el usuario?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $cliente->render() }}</center>

	@endsection