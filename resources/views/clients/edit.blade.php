@extends('layouts.app') 
@section('content')
	<div class="container">
		<div class="row">
	    <div class="col-sm-6 offset-sm-3">
	    	<br>
	      <h2 class="text-center">Editar Cliente</h2>
	      	@if ($errors->any())
	          <div class="alert alert-danger">
	             <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
	          </div>
	      	@endif
	      <br>
	      <form action="{{ route('clients.update', $client->id) }}" method="post" accept-charset="utf-8" id="form-1">
	        <input name="_method" type="hidden" value="PUT">
	      	{{ csrf_field() }}
	        <div class="form-group">
	          <input type="text" name="first_name" class="form-control"  placeholder="Ingrese su Nombre" value="{{ $client->first_name }}">
	        </div> 
	        <div class="form-group">
	          <input type="text" name="last_name" class="form-control"  placeholder="Ingrese su Apellido" value="{{ $client->last_name }}">
	        </div>
	        <div class="form-group">
	          <input type="email" name="email" class="form-control"  placeholder="Ingrese su Email" value="{{ $client->email }}">
	        </div>
	        <div class="form-group">
	          <input type="number" name="telephone" class="form-control"  placeholder="Ingrese su Telefono" value="{{ $client->telephone }}">
	        </div>
	        <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
	    </div>
	  </div>
	</div>
@endsection