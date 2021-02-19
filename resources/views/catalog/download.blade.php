<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Reparación</title>
	<style>
		.page-break {
    		page-break-after: always;
		}
		table{
			margin: auto;
			text-align: center;
			border: 1px solid #000;
			border-collapse: collapse;
			margin-top: 10px;
		}
		.header{
			margin: auto;
			text-align: center;
			border: 1px solid #fff;
			border-collapse: collapse;
		}
		td{
			width: 300px;
			text-align: left;
			padding: 0.3em;
		}
		th{
			width: 300px;
			text-align: center;
			padding: 0.3em;
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
		#button {
 			padding: 0;
 		}
		#button li {
			display: inline;
			font-family: Arial;
			font-size: 11px;
			width: 590px;
			text-decoration: none;
			float: left;
			padding: 10px;
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
	</style>
</head>
<body>
	<header>
		<table  class="header">
			<tr>
				<td class="header-td"><img  id="icono" src="https://www.udenar.edu.co/recursos/wp-content/uploads/2017/02/escudo400X400-300x300.jpg" alt=""></td>
				<td>
					<h2 class="heater-td-center" >Reporte Reparación</h2>
				</td>
				<td class="header-td">
					<img id="icono" src="https://www.tecnica3mdp.edu.ar/imagenes/informatica/img22.png" alt="">
				</td>
			</tr>
		</table>
			</header>
	<div>
		<table border="2" >
			<tr>
				<th scope="row">Marca</th>
				<td><h3><b>{{$reparacion->marca_linea}}<b></h3></td>
			</tr>
			<tr>
				<th scope="row">Fotografía</th>
				<td><img src="{{$reparacion->imagen}}"/></td>
			</tr>
			<tr>
				<th scope="row">Serial</th>
				<td>{{$reparacion->serial}}</td>
			</tr>
			<tr>
				<th scope="row">Identificación del Cliente</th>
				<td>{{$reparacion->id_cliente}}</td>
			</tr>
			<tr>
				<th scope="row">Identificación del Empleado</th>
				<td>{{$reparacion->id_empleado}}</td>
			</tr>
			<tr>
				<th scope="row">Fecha de Ingreso</th>
				<td>{{$reparacion->fecha_ing}}</td>
			</tr>
			<tr>
				<th scope="row">Observaciones</th>
				<td><p>{{$reparacion->observaciones}}</p></td>
			</tr>
			<tr>
				<th scope="row">Estado</th>
				<td>{{$reparacion->estado}}</td>
			</tr>
			<tr>
				<th scope="row">Descripción del Problema</th>
				<td><p>{{$reparacion->desc_problema}}</p></td>
			</tr>
			<tr>
				<th scope="row">Fecha de Salida</th>
				<td>{{$reparacion->fecha_sal}}</td>
			</tr>
			<tr>
				<th scope="row">Precio</th>
				<td>${{$reparacion->precio}}.00</td>
			</tr>
		</table>
	</div>
	<footer></footer>
</body>
</html>

	