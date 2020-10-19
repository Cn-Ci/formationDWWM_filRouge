<?php
	//PDO

	session_start();
?>

<nav class="col-sm 12 row ombre" id="navBar">

	<div class="col-sm-12 col-lg-2"><img id="logo" src="img/logoMobiliT.png" alt="Logo"></div> 

	<a href="#" class="col-sm-12 col-lg-2 alink">ACCUEIL</a>

	<a href="#" class="col-sm-12 col-lg-2 alink">PRÉSENTATION</a>

	<a href="#" class="col-sm-12 col-lg-2 alink">DESTINATIONS</a>
	<?php
		if (isset($_SESSION['id'])){
			?><a href ='#' class="col-sm-12 col-lg-2 alink">MON COMPTE</a><?php
		} else {
			?><a href="#" class="col-sm-12 col-lg-2 alink">CONNEXION</a><?php
		}
	?>

	<div class="col">
		
	</div>

</nav>
