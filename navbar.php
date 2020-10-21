<?php
	//PDO

	session_start();
?>

<div class="col-sm-12 row pr-0" id="navBar">

	<div id="BoutonBurgermenuTab">
		<div class="barre1"></div>
		<div class="barre2"></div>
	</div>

	<div class="col-xs-5 col-sm-12 col-lg-1"><img id="logo" src="img/logoMobiliT.png" alt="Logo"></div> 

	<nav class="row col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 menuTab">
		<a href="#" class="col-sm-12 col-md-12 col-lg-3 alink">ACCUEIL</a>
		<a href="#" class="col-sm-12 col-md-12 col-lg-3 alink">PRÉSENTATION</a>
		<a href="#" class="col-sm-12 col-md-12 col-lg-3 alink">DESTINATIONS</a>
		<?php
			if (isset($_SESSION['id'])){
				?><a href ='#' class="col-sm-12 col-md-12 col-lg-3 alink">MON COMPTE</a><?php
			} else {
				?><a href="#" class="col-sm-12 col-md-12 col-lg-3 alink">CONNEXION</a><?php
			}
		?>
	</nav>
</div>


