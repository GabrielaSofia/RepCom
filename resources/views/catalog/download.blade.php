<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Reparación</title>
	<style>
		table{
			margin: auto;
			text-align: center;
			border: 1px solid #fff;
			border-collapse: collapse;
			margin-top: 10px;
		}
		.header{
			margin: auto;
			text-align: center;
			font-family: Arial;
			border: 1px solid white;
			border-collapse: collapse;
			background-color: #04384e;
			color: white;
		}
		td{
			width: 300px;
			text-align: left;
			padding: 0.2em;
		}
		th{
			width: 200px;
			text-align: center;
			padding: 0.2em;
			background-color: #041424;
			color: white;
			text-align: left;
		}
		#icono{
			width: 70px;
			text-align: right;
		}
		#nombre{
			padding:0%;
			margin: 0%;
			font-size: 10px;
		}
		div{
			margin-top: 20px;
		}
		.header-td{
			width: 50px;
		}
		h2{
			width: 520px;
			text-align: center;
		}
		img{
			width: 250px;
		}
		.tdColor{
			background-color: #E6EFEF;
		}
	</style>
</head>
<body>
	<header>
		<table  class="header">
			<tr>
				<td class="header-td"><img  id="icono" src="https://www.udenar.edu.co/recursos/wp-content/uploads/2016/09/vertical.fw_-e1476916579853.png" alt=""></td>
				<td>
					<h2 class="heater-td-center" >Reporte Reparación #{{$reparacion->id}}</h2>
				</td>
				<td class="header-td">
					<img id="icono" src="https://www.tecnica3mdp.edu.ar/imagenes/informatica/img22.png" alt="">
				</td>
			</tr>
		</table>
			</header>
	<div>
		<table border="1" >
			<tr>
				<th scope="row">Marca del Computador</th>
				<td class="tdColor"><h3><b>{{$reparacion->marca_linea}}<b></h3></td>
			</tr>
			<tr>
				<th scope="row">Fotografía de Computador</th>
				<td style="text-align: center;"><img src="{{$reparacion->imagen}}"/></td>
			</tr>
			<tr>
				<th scope="row">Serial del Computador</th>
				<td class="tdColor">{{$reparacion->serial}}</td>
			</tr>
			<tr>
				<th scope="row">Identificación del Cliente</th>
				<td>{{$reparacion->id_cliente}}</td>
			</tr>
			<tr>
				<th scope="row">Identificación del Empleado</th>
				<td class="tdColor">{{$reparacion->id_empleado}}</td>
			</tr>
			<tr>
				<th scope="row">Fecha de Ingreso</th>
				<td>{{$reparacion->fecha_ing}}</td>
			</tr>
			<tr>
				<th scope="row">Observaciones</th>
				<td class="tdColor"><p>{{$reparacion->observaciones}}</p></td>
			</tr>
			<tr>
				<th scope="row">Estado de la reparación</th>
				<td>{{$reparacion->estado}}</td>
			</tr>
			<tr>
				<th scope="row">Descripción del Problema</th>
				<td class="tdColor"><p>{{$reparacion->desc_problema}}</p></td>
			</tr>
			<tr>
				<th scope="row">Fecha de Salida</th>
				<td>{{$reparacion->fecha_sal}}</td>
			</tr>
			<tr>
				<th scope="row">Precio de la reparación</th>
				<td class="tdColor">${{$reparacion->precio}}.00</td>
			</tr>
		</table>
	</div>
	<footer></footer>
</body>
</html>

	