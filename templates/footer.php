<head>
<?php 
include_once('header.php');
?>
 <link 
        rel="stylesheet" 
        type="text/css" 
        href="../assets/footerStyle.css">
</head>

<!-- ligne de séparation -->
<hr class="hrsep">
<!-- image footer -->
<div id="foot" class="img-fluid">
    <!-- Newsletters -->             
    <div class="news col-12 text-center container-fluid">
        <h2> Newsletter </h2>
        <h4> Inscrivez-vous 
            </br>
            pour recevoir nos meilleures offres !
        </h4>

        <div class="fondfoot">
            <form id="form" method="post" action="">
                <div class="mail row col-12 col-md-6">
                    <input type="text" id="email" name="email" size="25" class="text-center form-control-plaintext rounded m-1" placeholder="Votre adresse e-mail"/>
                </div>
                <input class="col-6 col-md-3 btn btn-success mt-2" id="btn-newsletter" type="submit" name="envoyer"/> 
                <div id="emailNewsletter_verif">
                    <span class="emailNewsletter">
                        <span class="emailNewsletter_ok">"Vous êtes inscrits à la Newsletter !</span>
                        <span class="emailNewsletter_ko">"Un problème est survenu lors de votre inscription !"</span>
                        <span class="emailNewsletter_pas_ok">"Cet e-mail est déjà inscrit à la Newsletter"</span>
                    </span>
                </div>
            </form>
        </div>
        

        <!-- colonnes -->
        <div class="row">
            <!-- colonne 1 -->
            <div class="col-12 col-lg-4 text-center p-2">
                Navigation
                <hr class="hrcon mt-2 mb-2">
                <p><a href="../controller/controleurMain.php">Accueil</a></p>
                <p><a href="../presentation/orga.php">Organisation</a></p>
                <p><a href="../controller/controllerDestination.php">Destinations</a></p>
                <p><a href="../controller/controleurTopic.php?action=showAllTopic">Forum</a> </p>
            </div>

            <!-- colonne 2 -->
            <div class="col-12 col-lg-4 text-center p-2 text-black-100">
                Aide
                <hr class="hrcon mt-2 mb-2">
                <p><a href="../controller/controllerUserConnect.php?action=afficherInscription">S'inscrire</a></p>
                <p><a href="../controller/controllerUserConnect.php?action=connexion">Se connecter</a></p>
            </div>

            <!-- colonne 3 -->
            <div class="col-12 col-lg-4 text-center p-2 text-black-100">
                CONTACT
                <hr class="hrcon mt-2 mb-2">
                <p class="text-center">mobiliT</p>
                <p class="text-center"><i class="fas fa-map-marker-alt pr-3"></i>79 Rue de Marseille, 75010 Paris</p>
                <p class="text-center"><i class="fas fa-phone-square-alt pr-3"></i>0 123 456 789 </p>
                <p class="text-center"><i class="fas fa-at pr-3"></i><a href="mailto:#">mobiliT@pro.fr</a></p>
            </div>
        </div>
    </div>
</div>

<!-- JQUERY -->
<script
    src         ="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin ="anonymous">
</script>

<!-- JAVASCRIPT -->
<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous">
</script>
<script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous">
</script>

<script 
    type="text/javascript" 
    src="../assets/newsletterScript.js">
</script>

    
