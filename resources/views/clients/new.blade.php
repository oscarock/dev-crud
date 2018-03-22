@extends('layouts.app') 
@section('content')
	<div class="container">
		<div class="row">
	    <div class="col-sm-6 offset-sm-3">
	    	<br>
	      <h2 class="text-center">Registrar Cliente</h2>
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
	      <form action="{{ URL::route('clients.store') }}" method="post" accept-charset="utf-8" id="form-1">
	      	{{ csrf_field() }}
	        <div class="form-group">
	          <input type="text" name="first_name" class="form-control"  placeholder="Ingrese su Nombre">
	        </div> 
	        <div class="form-group">
	          <input type="text" name="last_name" class="form-control"  placeholder="Ingrese su Apellido">
	        </div>
	        <div class="form-group">
	          <input type="email" name="email" class="form-control"  placeholder="Ingrese su Email">
	        </div>
	        <div class="form-group">
	          <input type="number" name="telephone" class="form-control"  placeholder="Ingrese su Telefono">
	        </div>
	        <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
	    </div>
	  </div>
	</div>
@endsection