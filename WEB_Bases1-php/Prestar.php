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
			<li><a href="PagPersonas.php">Volver</a></li>
		</ul>
		</nav>
		</div>
	</header>
	
	<div>
		<form class="Registro" action= "#" >
			Nombre* <input id="nombre" type="text" name="nombre">
			Primer Apellido* <input id="PrimerA" type="text" name="primerapellido" >
			Segundo Apellido* <input id="SegundoA" type="text" name="segundoapellido" >
			e-mail* <input id="Emal" type="text" name="e-mail">	
			Nombre del Articulo a Prestar <input id="Emal" type="text" name="Nombre Articulo">
			<select name="clase" id="clase">
				<option value="Libro">Libro</option>
				<option value="Revista">Revista</option>
				<option value="Pelicuka">Pelicula</option>

			</select>

			<input type="submit" name="Prestar" value="Prestar">

		</form>

	</div>	
		
		
</body>