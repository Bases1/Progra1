<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Biblioteca de Alejandrìa </title>
	<link href="styleTop.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="modernizr-1.1.min.js"></script>
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
			<li><a href="Paglibros.php">Volver</a></li>
		</ul>
		</nav>
		</div>
	</header>
	
	<div>
		<form class="Top" action="topNormalLibros.php" method= "POST" >
			Top <input type="text" name="numeroTop">
			<input type="submit" name="Buscar" value="Buscar">
		</form>

	</div>

	<div>
		<form class="TopMeses" action="topNormalLibros.php" method= "POST">
			Cantidad de libros <input type="text" name="numeroTop">
			Cantidad de meses <input type="text" name="numeroTop">
			<input type="submit" name="Buscar" value="Buscar">
		</form>

	</div>



	
</body>
</html>