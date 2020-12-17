<?php
	session_start();
?>

<link rel="stylesheet" href="inscription.css">

<div class="col-sm-12 row pr-0" id="navBar">

	<div id="BoutonBurgermenuTab">
		<div class="barre1"></div>
		<div class="barre2"></div>
	</div>

	<div class="col-xs-5 col-sm-12 col-lg-1"><img id="logo" src="img/logoMobiliT.png" alt="Logo"></div> 

	<nav class="row col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 menuTab">
		<a href="main.php" class="col-sm-12 col-md-12 col-lg alink">ACCUEIL</a>
		<a href="orga.php" class="col-sm-12 col-md-12 col-lg alink">ORGANISATION</a>
		<a href="destinations.php" class="col-sm-12 col-md-12 col-lg alink">DESTINATIONS</a>
		<a href="controller/controleurTopic.php?action=showAllTopic" class="col-sm-12 col-md-12 col-lg alink">FORUM</a>
		<?php
			if (isset($_SESSION['id'])){
				?><a href ='#' class="col-sm-12 col-md-12 col-lg alink">MON COMPTE</a>
				<a type='button' class='btn btn-danger col-lg m-5 text-black' href='../controller/controllerUtilIndex.php?action=deconnexion'>Se déconnecter</a><?php
			} else {
				?>
				<a type='button' class='col-sm-12 col-md-12 col-lg alink' href='controller/controllerUserConnect.php?action=afficherInscription'>S'INSCRIRE</a>
                <a type='button' class='col-sm-12 col-md-12 col-lg alink' href='controller/controllerUserConnect.php?action=connexion'>SE CONNECTER</a>
				<?php
			}
		?>
	</nav>
</div>

<style>
	#navBar{
		z-index           : 999;
		text-align        : center;
		position          : fixed;
		-webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.5);
		-moz-box-shadow   : 0px 4px 5px 0px rgba(0,0,0,0.5);
		box-shadow        : 0px 4px 5px 0px rgba(0,0,0,0.5);
		opacity           : 0.9;
		height            : 100px;
		background-color  : white;
	}
	#logo{
		max-width: 100px;
		max-height: 100px;
		margin-top: 10px;
	}
	.alink{
		font-size  : 23px;
		padding    : 35px 20px 35px 20px;
		transition : color 1s;
		color      :#228b22;
		font-family: 'Caviar Dreams', sans-serif;
	}
	a:hover{
		text-decoration: none;    
	}
	.alink:hover{
		transition: color 1s;
		color     : #114811;   
	}
	.whiteColor, a {
		color    : white;
	}
	#BoutonBurgermenuTab{
		width     : 30px;
		height    : 30px;
		margin-top: 30px;        
		position  : absolute;
		z-index   : 999;
		cursor    : pointer;
	}

	@media screen and (max-width: 991px){
		#navBar{
			background-color  : white;
			-webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.5);
			-moz-box-shadow   : 0px 4px 5px 0px rgba(0,0,0,0.5);
			box-shadow        : 0px 4px 5px 0px rgba(0,0,0,0.5);
		}
		#BoutonBurgermenuTab{
			width     : 30px;
			height    : 30px;
			margin-top: 30px;        
			position  : absolute;
			z-index   : 999;
			cursor    : pointer;
		}
		#BoutonBurgermenuTab .barre1{
			width           : 100%;
			height          : 3px;
			background-color: #228b22;
			z-index         : 999;
			margin-top      : 5px;
		}
		#BoutonBurgermenuTab .barre2{
			width           : 100%;
			height          : 3px;
			background-color: #228b22; ;
			z-index         : 999;
			margin-top      : 5px;
		}
		#BoutonBurgermenuTab .barre1.isClick{
			transform : rotate(45deg);
			transition: transform 1s;
			position  : fixed;
			width     : 30px;
		}  
		#BoutonBurgermenuTab .barre2.isClick{
			transform : rotate(-45deg);
			transition: transform 1s;
			position  : fixed;
			width     : 30px;
		} 
		.menuTab{
			transition       : transform .2s ease-in-out;
			transform        : translate(0%,-150%);
			-webkit-transform: translate(0%,-150%);
			background-color : white;
			box-sizing       : content-box;
		}
		.menuTab.isOpen{
			width             : auto;
			transform         : translate(0%);
			-webkit-transform : translate(0%);
			background-color  : white;
			-webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.5);
			-moz-box-shadow   : 0px 4px 5px 0px rgba(0,0,0,0.5);
			box-shadow        : 0px 4px 5px 0px rgba(0,0,0,0.5);
		}
	}

	@media screen and (max-width:575px) {
		/*! NAVABR */
		#BoutonBurgermenuTab{
			position: absolute;
			z-index : 999;
			width   : 5%;
			height  : 10px;
			cursor  : pointer;
		} 
	}	
</style>

