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
			<!--<li class="rss"><a href="#">Libros</a></li>
			<li class="twitter"><a href="#">Peliculas</a></li>
			<li class="home"><a href="#">Revistas</a></li>-->
			<li><a href="Paglibros.php">Libros</a></li>
			<li><a href="PagRevistas.php">Revistas</a></li>
			<li><a href="PagPeliculas.php">Peliculas</a></li>
		</ul>
		</nav>
		</div>
	</header>
	
	<div>
		<form class="Registro">
			Título* <input type="text" name="nombre">
			Director de la Revista* <input type="text" name="director" >
			Editorial* <input  type="text" name="editorial" >
			Estrelllas* <input type="text" name="estrellas">	

			<input type="submit" name="Agregar" value="Agregar">

		</form>

	</div>
</body>
</html>	