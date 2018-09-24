 <!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport"
			content="width= device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
			<title>REGISTRAR PELICULA</title>
		</head>

		<body> 

	
			<h1>REGISTRAR PELICULA</h1>
			<form method="POST" action="{{ url('/peliculas/registrar')  }}">

				{{csrf_field()}}

				Nombre: <input type="text" name="nombre"><br>
				Duracion: <input type="text" name="duracion"><br>
				Sinopsis: <input type="text" name="sinopsis"><br>
				Actores: <input type="text" name="actores"><br>
				Fecha de Estreno: <input id="date" type="date" name="fecha_de_estreno"> <br>
				id_audio: <input type="text" name="id_audio"><br>
				id_subtitulos: <input type="text" name="id_subtitulos"><br>

				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>
	

 
		</body>
		</html>
