@extends('layouts.master')
 
@section('content')
	
	<body style="background-color: #041424;">
	<div class="row" style="margin-top: 20px;">
		<a class="btn btn-info" href="{{ url('/clientes/create/') }}"><i class="fa fa-user-plus"></i>  Agregar Cliente</a>
		<table class="table table-light table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Identificación</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Teléfono</th>
				<th>Correo Electronico</th>
				<th>Dirección</th>
			</tr>
			@foreach( $arrayClientes as $key => $cliente )
				<a href="{{ url('/clientes/show/' . $cliente->id ) }}">
				<tr>
					<th scope="row">{{$cliente->id}}</th>
					<td>
						{{$cliente->id_cliente}}
					</td>
					<td>
						{{$cliente->nom_cliente}}
					</td>
					<td>
						{{$cliente->ape_cliente}}
					</td>
					<td>
						{{$cliente->tel_cliente}}
					</td>
					<td>
						{{$cliente->email_cliente}}
					</td>
					<td>
						{{$cliente->dir_cliente}}
					</td>
					<td>
						<a href="{{ url('/clientes/edit/' .$cliente->id) }}" style="width: 25px; padding:0px;" class="btn btn-warning"><i class="fa fa-edit"></i></a>
						<a href="{{ url('/clientes/delete/' .$cliente->id) }}" style="width: 25px; padding:0px;" class=" btn btn-danger"><i class="far fa-trash-alt" aria-hidden="true"></i></a>
					</td>
				</tr>
				</a>
			
			@endforeach     
		 
	</div>
	</body>
	
@stop