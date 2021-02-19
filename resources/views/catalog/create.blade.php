@extends('layouts.master')
 
	@section('content')
	<body style="background-color: #041424; ">
		<form action='#' method="POST" style="margin-top: 10px;">
			{{csrf_field()}}
			<table class="table table-light table-striped" style="text-align: center;">
				<th colspan="2"><h4>Nueva Reparación</h4></th>
				<tr>
					<td class="input-group">
						<span class='input-group-text'><b>Identificación del Cliente:</b></span>
						<input type="text" name="id_cliente" id="id_cliente" class="form-control" style="width: 300px;">
						<span class='input-group-text'><b>Serial:</b></span>
						<input type="text" name="serial" id="serial" class="form-control">
						<span class='input-group-text'><b>Marca - Linea:</b></span>
						<input type="text" name="marca_linea" id="marca_linea" class="form-control"></td>
				</tr>
				<tr>		
					<td class="input-group">
						<span class='input-group-text'><b>Fotografía:</b></span>
						<input type="text" name="imagen" id="imagen" class="form-control">
						<span class='input-group-text'><b>Fecha de Ingreso:</b></span>
						<input type="date" name="fecha_ing" id="fecha_ing" class="form-control">
						<span class='input-group-text'><b>Fecha de Salida:</b></span>
						<input type="date" name="fecha_sal" id="fecha_sal" class="form-control"></td>
				</tr>
				<tr>
					<td class="input-group">
						<span class='input-group-text'><b>Identificación del Empleado:</b></span>
						<input type="text" name="id_empleado" id="id_empleado" class="form-control">
						<span class='input-group-text'><b>Estado:</b></span>
						<select  class="form-select" name="estado" id="estado">
							<option value="PE">Pendiente.</option>
							<option value="EP">En Proceso.</option>
							<option value="TE">Terminado.</option>
							<option value="EN">Entregado.</option>
						</select>
						<span class='input-group-text'><b>Precio:</b></span>
						<input type="number" name="precio" id="precio" class="form-control">
						<span class="input-group-text">$</span></td>
				</tr>
				<tr>
					<td class="input-group">
						<span class='input-group-text'><b>Observaciones:</b></span>
						<textarea name="observaciones" id="observaciones" class="form-control" rows="2"></textarea>
						<span class='input-group-text'><b>Descripción del Problema:</b></span>
						<textarea name="desc_problema" id="desc_problema" class="form-control" rows="2"></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
					<a href="{{ url('/catalog') }}" style="width: 170px;" class="btn btn-info"><i class="fa fa-angle-left"></i> Volver al listado</a>
					<button type="submit" class="btn btn-success" style="width: 180px;" >
					<i class="fa fa-plus-square"></i>	
					Añadir
					</button></td>
				</tr>
			</table>
		</form>
	</body>					
	@stop

