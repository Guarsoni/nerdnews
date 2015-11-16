<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link href="recursos/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	<link href="recursos/css/nerdnews.css" rel="stylesheet" type="text/css">
   <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<header id="cabecalho" class="row">  
			<?php
			include ( 'topo.php' );
			?>
		</header>
		<nav id="menu" class="navbar navbar-default row" style="text-align: center;">
			<?php
			include ( 'menuori.html' );
			?>
		</nav>
		<section id="corpo" class="row">
			<?php
			include ( 'corpo.php' );
			?>
		</section>
		<footer class="rodape row">
			<?php
			include ( 'rodape.php' );
			
			?>

			</footer>
		<footer class="rodape row">
			<?php
			
			include ('mapa.php');
			?>

			</footer>
		   
	</div>
	


<script src="recursos/js/bootstrap.min.js"></script>
<script src="recursos/js/jquery.js"></script>
	</body>
	</html>