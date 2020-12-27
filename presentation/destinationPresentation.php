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
            <div id="les4img" class="col-12 ">
                <center>
                    <div class="img-fluid col-6 row "><img src="../img/carteO.png" class="img-fluid col-6 p-0"><img src="../img/carteE.png"class="img-fluid col-6 p-0"></div>
                    <div class="img-fluid col-6 row"><img src="../img/carteSO.png" class="img-fluid col-6 p-0"><img src="../img/carteSE.png" class="img-fluid col-6 p-0"></div>
                </center>
            </div>   
<?php }

function affichageDestination(Destination $destination, $region){ 
    
    foreach($destination as $dest){
        while($dest->getRegion() == $region){
            $i=1;?>
            <div id="<?php  echo $region?>" class="align-items-center m-3">
                <div class="<?php  echo $region.$i?> row d-flex justify-content-center m-2 mb-4">
                            <!-- image et texte -->
                            
                            <div class="">
                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-2">
                                    
                                        <img src="<?php echo $dest->getImage() ?>" class="img-fluid w-100" alt="les côtes roses de la région bretonne">
                                    </div>
                                    <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                        <h4 class="mb-3"><?php echo $dest->getLieu() ?></h4>
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
                        </div>
            <?php $i++;
        }
    }
}

function buttonAjout(){ ?>
        <div> <button class="btn btn-outline-success"> + Ajouter un article </button> </div>
    </div> 
<?php }