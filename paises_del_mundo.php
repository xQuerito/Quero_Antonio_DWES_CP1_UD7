<html>
	<head>
		<title>Continentes y sus paises</title>
	</head>
	<body>

		<?php

			$mysqli = new mysqli("localhost", "root", "pais_id", "nombre", "continente");
				if ($mysqli->connect_errno) {
					echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}else{
					echo "Conexión realizada.";
				}

		?>
		
		<center><h1>Continentes y sus paises</h1></center>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>África</b></td>
					<td><b>Europa</b></td>
					<td><b>Asia</b></td>
					<td><b>América</b></td>
					<td><b>Oceanía</b></td>
					<td><b>Antártida</b></td>
				</tr>
			<tbody>
				<tr>
					<td>54 Países y 1 Depend.</td>
					<td>50 Países y 3 Depend.</td>
					<td>49 Países y 7 Depend.</td>
					<td>35 Países y 25 Depend.</td>
					<td>15 Países y 16 Depend.</td>
					<td>0 Países y 0 Depend.</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
