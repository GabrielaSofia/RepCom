@extends('layouts.master')
	@section('content')   
	<body style="background-color: #041424;">
		<table class=' table table-light table-striped' style="border-radius: 10px; margin-top: 10px; " >
			<tr>
				<td rowspan="4" style="text-align: center;"><img src="{{$reparacion->imagen}}" style="height:300px; border-radius:20px;"/>  </td>
				<td colspan="2" style="text-align: center;"><h2><b>{{$reparacion->marca_linea}}<b></h2></td>
			</tr>
			<tr>
				<td><b>Identificación del Cliente:</b>{{$reparacion->id_cliente}}</td>
				<td><b>Fecha de Ingreso:</b>{{$reparacion->fecha_ing}}</td>
			</tr>
			<tr>
				<td><b>Identificación del Empleado:</b>{{$reparacion->id_empleado}}</td>
				<td><b>Observaciones:</b><p>{{$reparacion->observaciones}}</p></td>
			</tr>
			<tr>
				<td><b>Estado:</b>{{$reparacion->estado}}</td>
				<td><b>Descripción del Problema:</b><p>{{$reparacion->desc_problema}}</p></td>
			</tr>
			<tr>
				<td style="text-align: center;"><b>Serial: </b>{{$reparacion->serial}}</td>
				<td><b>Precio:</b>{{$reparacion->precio}}</td>
				<td><b>Fecha de Salida:</b>{{$reparacion->fecha_sal}}</td>
			</tr>
				<td colspan="3" style="text-align: center;">
				<a href="{{ url('/catalog') }}" style="width: 170px;" class="btn btn-info"><i class="fa fa-angle-left"></i> Volver al listado</a>
				<a href="{{ url('/catalog/edit/' . $reparacion->id ) }}" style="width: 130px;" class="btn  btn-warning"><i class="fa fa-edit"></i> Editar</a>
				<a href="" style="width: 130px;" class="btn btn-danger formulario-eliminar"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
				<!--{{ url('/catalog/delete/' . $reparacion->id ) }}-->
				
			</tr>
		</table>
	</body>     
	@stop
	@section('js')
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script>
			$('.formulario-eliminar').submit(function(e){
				e.preventDefault();

				Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
					)
				}
				})
			});
		</script>
	@endsection
	