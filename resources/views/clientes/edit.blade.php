@extends('layouts.master')
 
	@section('content')
	<body style="background-color: #041424; ">
		<form action='#' method="POST" style="margin-top: 10px;">
			{{csrf_field()}}
			<table class="table table-light table-striped" style="text-align: center;">
				<th colspan="2"><h4>Editar Cliente</h4></th>
				<tr>
					<td class="input-group">
						<span class='input-group-text'><b>Identificación:</b></span>
						<input type="number" name="id_cliente" id="id_cliente" value="{{ $cliente->id_cliente }}" class="form-control">
						<span class='input-group-text'><b>Nombre:</b></span>
						<input type="text" name="nom_cliente" id="nom_cliente" value="{{ $cliente->nom_cliente }}" class="form-control">
						<span class='input-group-text'><b>Apellido:</b></span>
						<input type="text" name="ape_cliente" id="ape_cliente" value="{{ $cliente->ape_cliente }}" class="form-control"></td>
				</tr>
				<tr>		
					<td class="input-group">
						<span class='input-group-text'><b>Teléfono:</b></span>
						<input type="text" name="tel_cliente" id="tel_cliente" value="{{ $cliente->tel_cliente }}" class="form-control">
						<span class='input-group-text'><b>Correo Electrónico:</b></span>
						<input type="email" name="email_cliente" id="email_cliente" value="{{ $cliente->email_cliente }}" class="form-control">
						<span class='input-group-text'><b>Dirección:</b></span>
						<input type="text" name="dir_cliente" id="dir_cliente" value="{{ $cliente->dir_cliente }}" class="form-control"></td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="{{ url('/clientes') }}" style="width: 170px;" class="btn btn-info"><i class="fa fa-angle-left"></i> Volver al listado</a>
						<button type="submit" class="btn btn-success" style="width: 180px;" >
						<i class="fas fa-user-edit"></i>	
						Modificar
						</button>
					</td>
				</tr>
			</table>
		</form>
	</body>					
	@stop
