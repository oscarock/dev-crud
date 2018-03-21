@extends('layouts.app') 
@section('content')
<div class="container">
		<div class="row">
			<div class="col-sm-7 offset-sm-3">
				<br>
				<br>
				<br>
					<a href="" class="btn btn-success">Agregar Cliente</a>
					<br>
					<br>
					<table class="table table-hover" id="buscar_resultados">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Fecha Creado</th>
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
								</tr>
							@endforeach
						</tbody>
					</table>
			</div>
		</div>		
	</div>
@endsection