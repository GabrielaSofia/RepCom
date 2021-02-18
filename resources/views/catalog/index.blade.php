@extends('layouts.master')
 
@section('content')
	<body style="background-color: #041424;">
	<div class="row">      
		@foreach( $arrayReparaciones as $key => $reparacion )       
			<a style="color: #04384e;" href="{{ url('/catalog/show/' . $reparacion->id ) }}">
				<table class="m-2" style="border-radius: 25px; padding:5px; background-color:white; text-align:center;">
					<tr>
						<td ><img  class='py-3' src="{{$reparacion->imagen}}" style="height:200px;"/></td>
					</tr>
					<tr>
						<td class="p-1"><h4 style="min-height:45px;margin:5px 0 5px 0">                   
							{{$reparacion->marca_linea}}               
						</h4></td>
					</tr>
					<tr>
						<td class="p-1"><h6>Serial:                    
						{{$reparacion->serial}}               
						</h6></td>
					</tr>
					<tr>
						<td class="p-1 pb-4"><h6>Identificación Cliente:                    
						{{$reparacion->id_cliente}}               
						</h6></td>
					</tr>
				</table>               		
			</a>        
		@endforeach 
	</div>
	</body>
	
@stop

