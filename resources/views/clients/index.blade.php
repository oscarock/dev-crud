@extends('layouts.app') 
@section('content')
<div class="container">
		<div class="row">
			<div class="col-sm-7 offset-sm-3">
				<br>
				<br>
				<br>
					<a href="{{ URL::route('clients.create') }}" class="btn btn-success">Agregar Cliente</a>
					<br>
					<br>
					@if(\Session::has('message'))
						<div class="alert alert-dismissible alert-success">
				  		<button type="button" class="close" data-dismiss="alert">&times;</button>
				  		<h3>{{ \Session::get('message') }}</h3>
						</div>
					@endif	
					<table class="table table-hover" id="buscar_resultados">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Fecha Creado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($clients as $client)
								<tr>
									<td>{{ $client->id }}</td>
									<td>{{ $client->first_name }}</td>
									<td>{{ $client->last_name }}</td>
									<td>{{ $client->email }}</td>
									<td>{{ $client->telephone }}</td>
									<td>{{ $client->created_at }}</td>
									<td>
										<a class="btn btn-info" href="{{ route('clients.edit', $client) }}">Editar</a>
										<br>
										<br>
										<form id="delete-form" action="{{ route('clients.destroy', $client->id) }}" method="POST">{{ csrf_field() }}
											<input name="_method" type="hidden" value="DELETE">	
											<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">Eliminar</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
			</div>
		</div>		
	</div>
@endsection