<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width= device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
	<title> TITULO</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/styles.css" rel="stylesheet" >-->
</head>

<body>
	<h1>NUEVO USUARIO</h1>

	<form method="POST" action="{{ url('/usuarios/crear')  }}">

	{{csrf_field()}}

	Nombre: <input type="text" name="nombre"><br>
  	Apellido: <input type="text" name="apellido"><br>
  	Email: <input type="email" name="email"><br>
  	Telefono: <input type="text" name="telefono"><br>
  	Fecha de Nacimiento: <input id="date" type="date" name="fecha_de_nacimiento"> <br>
  	Contraseña: <input type="text" name="contrasenia"><br>
  	
	<button type="submit" class="btn btn-primary">Enviar</button>

	</form>

</body>
</html>
