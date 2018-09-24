<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport"
			content="width= device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
			<meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
			<title>REGISTRAR SALA</title>
		</head>

		<body>
			<h1>REGISTRAR SALA</h1>
			<form method="POST" action="{{ url('/salas/registrar')  }}">
				{{csrf_field()}}
				Cantidad de butacas: <input name="cantidad_butacas" type="number" min="100" max="500" step="10" value ="100"><br>
				Precio: <input type="number" step="0.10" min="50" name="precio"><br>
				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>
			
		</body>
		</html>