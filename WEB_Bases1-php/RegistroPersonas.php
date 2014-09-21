<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Biblioteca de Alejandrìa </title>
	<link href="styleRegistro.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<header id="site_head"><!--useful to create the 960px limit-->
		<div class="header_cont">
		<h1><a href="index.php">biblioteca de alejandria</a></h1>
		
		<nav class="head_nav">
		<ul>
			<li><a href="Paglibros.php">Libros</a></li>
			<li><a href="PagRevistas.php">Revistas</a></li>
			<li><a href="PagPeliculas.php">Peliculas</a></li>
		</ul>
		</nav>
		</div>
	</header>
	
	<div>
		<form class="Registro" action="procesarPersona.php" >
			Nombre* <input id="nombre" type="text" name="nombre">
			Primer Apellido* <input id="PrimerA" type="text" name="primerapellido" >
			Segundo Apellido* <input id="SegundoA" type="text" name="segundoapellido" >
			Telefono* <input id="Telefono" type="text" name="telefono" >
			e-mail* <input id="Emal" type="text" name="e-mail">	

			<select name="clase" id="clase">
				<option value="Estudiante">Estudiante</option>
				<option value="Colega">Colega</option>
				<option value="Familiar">Familiar</option>

			</select>

			<input type="submit" name="Agregar" value="Agregar">

		</form>

	</div>	
		
		
</body>
</html>