<!DOCTYPE html>
<html>
<head>
	<title>Proyecto Tatto</title>
		

		<style>
		header{
			position: relative;
			margin: auto;
			text-align: center;
			padding: 5px;
		}
		

		nav{
			position: relative;
			margin: auto;
			width: 100%;
			height: auto;
			background: black;
		}

		nav ul{
			position: relative;
			margin: auto;
			width: 100%;
			height: auto;
			background: black;
		}

		nav ul li{
			display: inline-block;
			width: 19%;
			line-height: 40px;
			list-style: none;
		}

		nav ul li a{
			color: yellow;
			text-decoration: none;
		}

		section{
			position: relative;
			padding: 20px;
		}

	</style>
</head>
<body>
	<header>

		<h1 align="center">PROYECTO TATTO</h1>

	</header>

	<?php 
		include "modulos/navegacion.php";
	 ?>

	<section>
		<?php 
			$mvc = new TattoController();
			$mvc -> enlacesPaginasController(); 
		 ?>
	</section>
</body>
</html>