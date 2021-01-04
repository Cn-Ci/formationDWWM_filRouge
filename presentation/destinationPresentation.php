<?php

function html($title){ ?>
    <!DOCTYPE html>
        <html lang="fr">
        <head>
            <title><?php echo $title  ?></title>
            <meta charset="utf-8">
            <!-- BOOTSTRAP -->
            <link 
                rel="stylesheet" 
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
                integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
                crossorigin="anonymous" />
            <link 
                rel="stylesheet" 
                href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                crossorigin="anonymous">
            
            <!-- CSS -->
            <link 
                rel="stylesheet" 
                type="text/css" 
                href="../mainStyle.css">
            <link 
                rel="stylesheet" 
                type="text/css" 
                href="../destinations.css">
            <link 
                rel="stylesheet" 
                type="text/css" 
                href="../footerStyle.css">
            <!-- TYPO -->
            <link 
                href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
                rel="stylesheet"
                type="text/css"/>
            <link 
                href="https://fonts.cdnfonts.com/css/caviar-dreams" 
                rel="stylesheet">
            <link 
                href="https://fonts.googleapis.com/css?family=Cinzel" 
                rel="stylesheet">
            <link 
                href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 
                rel="stylesheet">
        </head>
        <body>
<?php }

function navbar(){ ?>
    <!-- Navbar -->
    <div class="container-fluid">
        <?php include '../navbar.php';?>
    </div>
<?php }

function footer(){ ?>
    
            <!-- ligne de séparation -->
            <hr class="hrsep">
                <?php include '../footer.php';?>
            </footer>

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
                src="script.js">
            </script>
        </body>
    </html>
<?php }

function boutonFrance(){ ?>
    <div class="principale">
            <!-- Image de la France -->
            <div id="les4img" class="col-6 offset-3">
                <center>
                    <!-- <div class="img-fluid col-6 row "><img src="../img/carteO.png" class="img-fluid col-6 p-0"><img src="../img/carteE.png"class="img-fluid col-6 p-0"></div>
                    <div class="img-fluid col-6 row"><img src="../img/carteSO.png" class="img-fluid col-6 p-0"><img src="../img/carteSE.png" class="img-fluid col-6 p-0"></div> -->
                
                <script src="../presentation/cmap/France-map.js"></script>
                <script>francefree()</script>
                </center>
            </div>   
<?php }

function affichageDestination($destination, $region){ 
    $i=1; ?>
    <div id="<?php  echo $region?>" class="align-items-center m-3">
    <?php foreach($destination as $dest){
         if($dest->getRegion() == $region){?>
            
                <div class="<?php  echo $region.$i?> row d-flex justify-content-center m-2 mb-4">
                            <!-- image et texte -->
                            
                            <div class="">
                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-2">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode( $dest->getImage() ); ?>" class="img-fluid w-100" alt="les côtes roses de la région bretonne"/>
                                        <!-- <div class="img-fluid w-100" alt="les côtes roses de la région bretonne"><?php //echo $dest->getImage() ?></div> -->
                                    </div>
                                    <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                        <h4 class="mb-3"><?php echo strtoupper($dest->getLieu()) ?></h4>
                                        <p style="text-indent: 20px"><?php echo $dest->getPetiteDescription() ?></p>
                                        </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > <?php echo $dest->getDescription() ?></p>
                                        <!-- en lire plus -->
                                        <div class="collapse multi-collapse" id="fermeture1">
                                            <div>

                                                <p id="fermeture1" style="text-indent: 20px"><?php echo $dest->getAtout1() ?></p>
                                                <p id="fermeture1" style="text-indent: 20px"> <?php echo $dest->getAtout2() ?></p>
                                                <p id="fermeture1" style="text-indent: 20px"><?php echo $dest->getAtout3() ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="plus text-right col-10 offset-1 mb-2">
                                    <a  class="text-success" data-toggle="collapse" href="#fermeture1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                                </div>
                            </div>

                            <!-- lien forum + lien exploration -->
                            <div class="forumLien row col-12">
                                <div class="forum text-center col-10">
                                    <a href ="<?php echo $dest->getExtraitForum() ?>"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                                </div>
                                <div class="bouton text-center col-2"> 
                                    <a href ="<?php echo $dest->getLien() ?>"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                                </div>
                            </div>
                        
            <?php $i++;
        }
        echo "</div>";
    }
    
}

function buttonAjout(){ ?>
        <div> <button class="btn btn-outline-success"> + Ajouter un article </button> </div>
    </div> 
    

    <div class="container" style="display:none">
        <div class="globalConnexion text-center p-2 col-10 offset-1">
            <form action="destinationPresentation.php?action=ajoutDestination" method="post">
                <!-- Region -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-6">
                            <!-- lieu -->
                            <div class="form-group ">
                                <label for="lieuDestination">Lieu </label>
                                <input type="text" class="form-control" id="lieuDestination" placeholder="Ville ou zone" alt="Saisissez le nom du lieu que vous souhaitez faire découvrir">
                            </div>
                        
                            <div class="form-group ">
                                <label for="selectRegion">Choisissez une région de France</label>
                                <select class="form-control" id="selectRegion">
                                    <option>nord est</option>
                                    <option>nord ouest</option>
                                    <option>sud est</option>
                                    <option>sud ouest</option>
                                </select>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="col-6 ">
                            
                                <label for="photoDestination">Photo</label>
                                <input type="file" class="form-control h-100 " id="photoDestination" alt="Veillez téléverser une photo illustrant le lieu proposé">
                            
                        </div>
                    </div>
                </div>               
                
                <!-- Petite description -->
                <div class="form-group">
                    <label for="introDestination">Description introductive</label>
                    <input type="text" class="form-control" minlength="10" maxlength="255" id="introDestination" placeholder="Veillez saisir un texte court d'introduction au lieu" alt="Veillez saisir une petite introduction du lieu présenté" >
                </div>
                <div class="form-group">
                    <label for="descriptionDestination">Description du lieu</label>
                    <input type="text" class="form-control" minlength="100" maxlength="500" id="descriptionDestination" placeholder="Veillez décrire plus précisémment le lieu a visiter" alt="Veillez saisir description précise et détaillée du lieu à visiter" required>
                </div>
                <div class="form-group">
                    <label for="atout1Destination">Premier atout</label>
                    <input type="text" class="form-control" minlength="100" maxlength="300" id="atout1Destination" placeholder="Premier atout du lieu proposé" alt="Présenter le premier atout du lieu proposé en visite" required>
                </div>
                <div class="form-group">
                    <label for="atout2Destination">Deuxième atout</label>
                    <input type="text" class="form-control" minlength="100" maxlength="300" id="atout2Destination" placeholder="Deuxième atout du lieu proposé" alt="Présenter le deuxième atout du lieu proposé en visite" required>
                </div>
                <div class="form-group">
                    <label for="atout3Destination">Deuxième atout</label>
                    <input type="text" class="form-control" minlength="100" maxlength="300" id="atout2Destination" placeholder="Troisième atout du lieu proposé" alt="Présenter le troisième atout du lieu proposé en visite" >
                </div>
                <div class="form-group">
                    <label for="lienSiteWeb">Lien vers un site web </label>
                    <input type="text" class="form-control" maxlength="300" id="lienSiteWeb" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à plus d'informations pour cette destination">
                </div>
                <div class="form-group">
                    <label for="lienExtraitForum">Lien vers un extrait du forum </label>
                    <input type="text" class="form-control" maxlength="300" id="lienExtraitForum" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à un sujet du forum pertinent">
                </div>
                <button type="submit" class="btn btn-primary col-2 offset-5" style="background-color: #228b22;border: black;">Submit</button>
            </form>
        </div>
    </div>
<?php }