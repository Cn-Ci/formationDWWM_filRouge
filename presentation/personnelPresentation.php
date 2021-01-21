<?php
function afficherPersonnel(array $personnels){
    foreach($personnels as $personne){ 
    ?>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12  personnel">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5 ml-5">
                    <img class="photoPersonnel" src="<?= $personne->getPhoto() ?>" alt="Pesonnel1"><br>
                    <h3>
                        <strong><?= $personne->getPrenom(). " " . $personne->getNom() ?><br>
                        <?= $personne->getEmploi() ?></strong>
                    </h3>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <p class="couleur mt-3 descriptionPersonne text-right">
                        <?= $personne->getDescription() ?>
                    </p><br>  
                </div>
                <ul class="social-network social-circle text-center">
                    <li><a href ="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook" style="font-size:3rem; color:#3B5998"><?= $personne->getFbLink()?></i></a></li>
                    <li><a href ="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter" style="font-size:3rem; color:#0590B8"><?= $personne->getTwLink()?></i></a</li>
                    <li><a href ="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin" style="font-size:3rem; color:#007bb7"><?= $personne->getLiLink()?></i></a></li>
                </ul>
            </div>
            <?php if(isset($_SESSION) && !empty($_SESSION) && $_SESSION['profil'] == 'administrateur'){
                ?>
                <a href='../controller/controlleurFormAddEmploye.php?action=modifier&id=<?= $personne->getId() ?>'>
                    <button type="submit" class="btn btn-outline-success col-1 col-lg-3 text-center ml-5 "><i class="fas fa-pen"></i>  </button>           
                </a>
                <a href='../controller/controllerPersonnel.php?action=supprimer&id=<?= $personne->getId() ?>'>
                    <button type="submit" class="btn btn-outline-danger col-1 col-lg-3"><i class="fas fa-trash-alt"></i> </button>           
                </a>
            <?php } ?>
            <hr>
        </div>
   <?php }
} ?>