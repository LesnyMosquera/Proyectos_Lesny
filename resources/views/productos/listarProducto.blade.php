@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')
<center><h2>Lista de Producos</h2></center>
<br>
<a href="{{ route('producto.create') }}" onclick="return confirm('Desea crear un nuevo producto?')" class="btn btn-info">Agregar producto</a>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Codigo</th>
			<th>Producto</th>
			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($producto as $dato)

		<tr>
			
			<td>{{ $dato->id }}</td>
			<td>{{ $dato->producto}}</td>
			
			<th style="text-align:right"><span><a href=""  class="glyphicon glyphicon-pencil"></span></a></th>
			
			<th style="text-align:right"><span><a href="" onclick="return confirm('Está seguro que desea eliminar producto?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $producto->render() }}</center>

	@endsection