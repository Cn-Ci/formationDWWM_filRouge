
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
            <form method="post" action="indexNewsletter.php?email=1">
                <input type="text"  id="email" name="email" size="25" class="col-11 text-center form-control-plaintext rounded m-4" placeholder="Votre adresse e-mail"/>
                <input type="radio" name="new" value="0" />S''inscrire
                <input type="radio" name="new" value="1" />Se désinscrire<br />
                <input type="submit" value="Envoyer" name="submit"  class="btn btn-success" /> 
            </form>
        </div>

        <!-- colonnes -->
        <div class="row">
            <!-- colonne 1 -->
            <div class="col-12 col-lg-4 text-center p-2">
                Navigation
                <hr class="hrcon">
                <p><a href="orga.php">Accueil</a></p>
                <p><a href="orga.php">Organisation</a></p>
                <p> <a href="#">Destinations</a></p>
                <p><a href="#">Forum</a> </p>
            </div>

            <!-- colonne 2 -->
            <div class="col-12 col-lg-4 text-center p-2 text-black-100">
                Aide
                <hr class="hrcon">
                <p><a href="#">Personnel</a></p>
                <p><a href="#">Recherche</a></p>
                <p><a href="#">s'inscrire</a></p>
                <p><a href="#">Votre compte</a></p>
            </div>

            <!-- colonne 3 -->
            <div class="col-12 col-lg-4 text-center p-2 text-black-100">
                CONTACT
                <hr class="hrcon">
                <p class="text-center">mobiliT</p>
                <p class="text-center"><i class="fas fa-map-marker-alt pr-3"></i>79 Rue de Marseille, 75010 Paris</p>
                <p class="text-center"><i class="fas fa-phone-square-alt pr-3"></i>0 123 456 789 </p>
                <p class="text-center"><i class="fas fa-at pr-3"></i><a href="mailto:#">mobiliT@pro.fr</a></p>
            </div>
        </div>
    </div>
</div>
