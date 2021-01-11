
<!-- ligne de séparation -->
<hr class="hrsep">
<!-- image footer -->
<div id="foot" class="img-fluid">
    <!-- Newsletters -->             
    <div class="news col-12 text-center container-fluid">
        <h2> Newsletter </h2>
        <h4> Inscrivez-vous 
            </br>
            pour recevoir nos meilleurs offres !
        </h4>
        
        <div class="fondfoot">
            <form method="post" action="../controller/controllerNewsletter.php?email=1">
                <input type="text"  id="email" name="email" size="25" class="col-11 text-center form-control-plaintext rounded m-4" placeholder="Votre adresse e-mail"/>

                <div class="row">
                    <div class="col-12"><input type="radio" name="new" value="1" />S''inscrire</div> 
                </div>

                <input class="btn btn-success mt-2" type="submit" value="Envoyer" name="submit"  class="btn btn-success" /> 
            </form>
        </div>

        <!-- colonnes -->
        <div class="row">
            <!-- colonne 1 -->
            <div class="col-12 col-lg-4 text-center p-2">
                Navigation
                <hr class="hrcon mt-2 mb-2">
                <p><a href="../filrouge2/controller/controleurMain.php">Accueil</a></p>
                <p><a href="../orga.php">Organisation</a></p>
                <p><a href="../filrouge2/controller/controllerDestination.php">Destinations</a></p>
                <p><a href="../filrouge2/controller/controleurTopic.php?action=showAllTopic">Forum</a> </p>
            </div>

            <!-- colonne 2 -->
            <div class="col-12 col-lg-4 text-center p-2 text-black-100">
                Aide
                <hr class="hrcon mt-2 mb-2">
                <p><a href="../filrouge2/controller/controllerUserConnect.php?action=afficherInscription">S'inscrire</a></p>
                <p><a href="../filrouge2/controller/controllerUserConnect.php?action=connexion">Se connecter</a></p>
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
