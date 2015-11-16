<div class="container">
	   <?php
		     $pagina = isset($_GET["pagina"]) ? $_GET['pagina'] : ' ';
			  if(empty($_GET["pagina"])){
                     include('home.php');
                     }
                     else	

			         if ($pagina == 0) {
					     include('home.php');
					 }

			         if ($pagina == 1) {
					     include('dc.php');
					 }
					 else
					     if ($pagina == 2) {
						     include ('marvel.php');
						 }
		             else
					     if ($pagina == 3) {
						     include ('fic.php');
						 }
					 else
					     if ($pagina == 4) {
						     include ('ter.php');
						 }	 
					 else
					     if ($pagina == 5) {
						     include ('twd.php');
						 }	  
					 else
					     if ($pagina == 6) {
						     include ('got.php');
						 }	 
						  else
					     if ($pagina == 7) {
						     include ('sony.php');
						 }	
						  else
					     if ($pagina == 8) {
						     include ('micro.php');
						 }
						 else
					     if ($pagina == 9) {
						     include ('nac.php');
						 }	 	  	 	 	 	  	 	 
						  else
					     if ($pagina == 10) {
						     include ('int.php');
						 }	 
						  else
					     if ($pagina == 11) {
						     include ('dragon.php');
						 }	 	  	 	 	 	
						  else
					     if ($pagina == 12) {
						     include ('poke.php');
						 }	
						
						 else
					     if ($pagina == 13) {
						     include ('contato.php');
						 }	
		 ?>
</div>