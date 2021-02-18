@extends('layouts.master')
	@section('content')
	@foreach ($arrayReparaciones as $arrayReparacion)
	<body style="background-color: #041424;">
		<table class=' table table-light table-striped' style="border-radius: 10px; margin-top: 10px; " >
			<tr>
				<td rowspan="4" style="text-align: center;"><img src="{{$arrayReparacion->imagen}}" style="height:300px; border-radius:20px;"/>  </td>
				<td colspan="2" style="text-align: center;"><h2><b>{{$arrayReparacion->marca_linea}}<b></h2></td>
			</tr>
			<tr>
				<td><b>Identificación del Cliente:</b>{{$arrayReparacion->id_cliente}}</td>
				<td><b>Fecha de Ingreso:</b>{{$arrayReparacion->fecha_ing}}</td>
			</tr>
			<tr>
				<td><b>Identificación del Empleado:</b>{{$arrayReparacion->id_empleado}}</td>
				<td><b>Observaciones:</b><p>{{$arrayReparacion->observaciones}}</p></td>
			</tr>
			<tr>
				<td><b>Estado:</b>{{$arrayReparacion->estado}}</td>
				<td><b>Descripción del Problema:</b><p>{{$arrayReparacion->desc_problema}}</p></td>
			</tr>
			<tr>
				<td style="text-align: center;"><b>Serial: </b>{{$arrayReparacion->serial}}</td>
				<td><b>Precio:</b>{{$arrayReparacion->precio}}</td>
				<td><b>Fecha de Salida:</b>{{$arrayReparacion->fecha_sal}}</td>
			</tr>
				<td colspan="3" style="text-align: center;">
				<a href="{{ url('/catalog') }}" style="width: 200px;" class="btn btn-success"><i class="fas fa-angle-left"></i> Volver al listado</a>
				<a href="{{ url('/catalog/edit/' . $arrayReparacion->id ) }}" style="width: 200px;" class="btn btn btn-info"><i class="fas fa-pencil-alt"></i> Editar Reparación</a></td>
			</tr>
		</table>
	</body>
	@endforeach     
	@stop