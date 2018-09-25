@extends('Plantillas.principal')
@extends('Plantillas.librerias')

@section('cuerpo')
<center><h2>Lista de formas de pago</h2></center><br>
<a href="{{ route('formaPago.create') }}" onclick="return confirm('Desea crear un nuevo estado?')" class="btn btn-info">Crear forma de pago</a><p>
	<table class="table table-striped table-responsive">
		<tr>
			<th>Codigo</th>
			<th>Forma de pagos</th>
			<th style="text-align:right">Editar</th>
			<th style="text-align:right">Borrar</th>
			
		</tr>

		@foreach($formapago as $dato)

		<tr>
			
			<td>{{ $dato->id }}</td>
			<td>{{ $dato->FormaPagos}}</td>
			
			<th style="text-align:right"><span><a href=""  class="glyphicon glyphicon-pencil"></span></a></th>
			
			<th style="text-align:right"><span><a href="" onclick="return confirm('Está seguro que desea eliminar la forma de pago'{{$dato->Estado}}' ?')" class="glyphicon glyphicon-trash"></span></a></th>
		</tr>
		@endforeach
	</table>
	<center>{{ $formapago->render() }}</center>

	@endsection