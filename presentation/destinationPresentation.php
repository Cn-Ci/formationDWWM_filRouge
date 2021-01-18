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
                href="../css/mainStyle.css">
            <link 
                rel="stylesheet" 
                type="text/css" 
                href="../assets/destinations.css">
        
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
    
    <div class="principale">
<?php }

function footer(){ ?>
<!-- fin de la d.iv class="principale" -->
    </div>
            <!-- ligne de séparation -->
            
                <?php include '../templates/footer.php';?>
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
                src="../assets/scriptDestination.js">
            </script>
        </body>
    </html>
<?php }

function boutonFrance(){ ?>
        
            <!-- Image de la France -->
            <div id="divContenantFranceMap" class="col-6 offset-3 mb-2">
                <div id="les4img" class="col-12 mb-2">
                    <center>
                        <?php   include('../presentation/cmap/carte.html') ?>
                    </center>
                </div> 
            </div>  
            <div id="textAjax" ></div>
<?php }

function affichageDestination($destination, $region, $session)
{ 
    $i=1; ?>

    <div id="<?php  echo $region ?>" class="align-items-center m-3">
        <?php foreach($destination as $dest){
            if($dest->getRegion() == $region){ ?>
                <!-- affichage de la destination -->
                <div class="<?php  echo $dest->getRegion().$i ?> row d-flex justify-content-center m-2 mb-4">
                    <div class="">
                        <div class="row">
                            <!-- image  -->
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode( $dest->getImage() ); ?>" class="img-fluid w-100" alt="Image descriptive de la region"/>
                            </div>
                            <!-- desription + atouts -->
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <!-- titre en majuscule -->
                                <h4 class="mb-3 row d-flex justify-content-between">
                                    <div><?php echo strtoupper($dest->getLieu()) ?></div>
                                </h4>
                                <!-- intro et description -->
                                <p style="text-indent: 20px"><?php echo $dest->getPetiteDescription() ?></p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > <?php echo $dest->getDescription() ?></p>
                                <!-- en lire plus = les atouts -->
                                <div class="collapse multi-collapse" id="fermeture1">
                                    <div>
                                        <p id="fermeture1" style="text-indent: 20px"><?php echo $dest->getAtout1() ?></p>
                                        <p id="fermeture1" style="text-indent: 20px"><?php echo $dest->getAtout2() ?></p>
                                        <p id="fermeture1" style="text-indent: 20px"><?php echo $dest->getAtout3() ?></p>
                                    </div>
                                    <!-- les boutons -->
                                    <div class="row d-flex justify-content-around ">
                                    <?php 
                                        var_dump($_SESSION);
                                        echo $dest->getIdUser();
                                         if(isset($_SESSION) && isset($_SESSION['id']) && $_SESSION['id']==$dest->getIdUser())
                                        {  
                                                    $maj=true;
                                                    echo"pamplemousse";
                                                    buttonAjout($maj, $dest);
                                                ?>
                                            <div>
                                                <a href='../controller/controllerDestination.php?action=suppDestination&amp;id=<?php echo $dest->getIdDestination()?>'>
                                                    <button class='btn btn-outline-danger' value='Remove'>Supprimer</button>
                                                </a>
                                            </div> 
                                        <?php 
                                        } ?>
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
                            <a href ="<?php echo $dest->getExtraitForum() ?>"><button type="button" class="btn btn-outline-success color-228B22" target="_blank">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="<?php echo $dest->getLien() ?>"><button type="button" class="btn btn-outline-success color-228B22" target="_blank">M'y rendre</button> </a>
                        </div>
                    </div>
                            
                    <?php $i++;
                // fermeture de la d.iv d'une destination
                echo "</div>";
            }
        }
        //fermeture div de toutes les destinations
    echo "</div>";    
}

function buttonAjout($maj=null, $dest=null)
{ 
    if($maj){$idDestination = $dest->getIdDestination();}?>
     
        <div> 
            <?php $ajout= !$maj || $maj==null ?>
            <button id="<?php if(!$maj || $maj==null){echo "AjoutDestination";}elseif($maj){echo "ModifDestination". $idDestination;} ?>" class='<?php if(!$maj || $maj==null){ echo "btn btn-outline-success";}elseif($maj==true){echo "btn btn-outline-danger";}else{}?>'> 
                <?php if(!$maj || $maj==null){ echo "+ Ajouter un article ";}elseif($maj){echo "Modifier l'article";}else{};?>
            </button> 
        </div>
        
        <div id="<?php if(!$maj || $maj==null){ echo "formAjoutDestination";}elseif($maj){echo "formModifDestination". $idDestination;}else{};?>" class="container" style="display:none">
        
        <div class="globalConnexion text-center p-2 col-10 offset-1">
                <form action="../controller/controllerDestination.php?action=<?php if(!$maj || $maj==null){echo "ajoutDestination";}elseif($maj){echo "modifDestination&id=".$idDestination;} ?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <div class="form-row align-items-center">
                            <div class="col-6">
                                <!-- lieu -->
                                <div class="form-group ">
                                    <label for="<?php if(!$maj){echo "lieuDestination" ;}else{echo "lieuDestination". $idDestination;}?>">Lieu </label>
                                    <input type="text" class="form-control" id="<?php if(!$maj){echo "lieuDestination" ;}else{echo "lieuDestination". $idDestination;}?>" name="lieu" value="<?php if($maj){echo $dest->getLieu() ;}?>" placeholder="Ville ou zone" alt="Saisissez le nom du lieu que vous souhaitez faire découvrir">
                                </div>
                                <!-- Region -->
                                <div class="form-group ">
                                    <label for="<?php if(!$maj){echo "selectRegion" ;}else{echo "selectRegion". $idDestination;}?>">Région</label>
                                    <select class="form-control" id="<?php if(!$maj){echo "selectRegion" ;}else{echo "selectRegion". $idDestination;}?>" name="region">
                                        <option <?php if(!$maj){echo "selected";}elseif($maj){echo "value=".$dest->getRegion();} ?>><?php if(!$maj){echo "Choisir votre région";}elseif($maj){echo $dest->getRegion();}?></option>
                                        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                                        <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                                        <option value="Bretagne">Bretagne</option>
                                        <option value="Centre">Centre</option>
                                        <option value="Corse">Corse</option>
                                        <option value="Grand-Est">Grand-Est</option>
                                        <option value="Hauts-de-France">Hauts-de-France</option>
                                        <option value="Ile-de-France">Ile-de-France</option>
                                        <option value="Normandie">Normandie</option>
                                        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                                        <option value="Occitanie">Occitanie</option>
                                        <option value="Pays-de-Loire">Pays-de-Loire</option>
                                        <option value="Provence-Alpes-Côte-d-Azur">Provence-Alpes-Côte-d'Azur</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="col-6 form-group  ">
                                <div class="col-10 offset-1 ">
                                    <?php if($maj==true){ ?>
                                         <img id='imageDestinationModif' src='data:image/jpeg;base64,<?php echo base64_encode( $dest->getImage()) ?>' />
                                    <?php } ?>
                                </div>
                                <div class="col-10 offset-1">
                                <?php if(!$maj){ ?>
                                    <label for="image" class="mt-2">Photo</label>
                                    <input type="file" name="image" placeholder="bla" class="form-control h-100 " id="image" alt="Veillez téléverser une photo illustrant le lieu proposé" accept="image/png, image/jpeg">
                                    
                                <?php }elseif($maj==true){ ?>
                                    <!-- bouton pour le modal -->
                                    <div class="row">
                                        <div>Modification de l'image</div>
                                        <div>   
                                            <button id="<?php echo "boutonModifImageDestination".$idDestination?> type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#formulaireModifPhoto">
                                                <img id="penUpdateDestination" src="../img/penUpdate.png">
                                            </button>
                                        </div>
                                    </div>
                                    <!-- modal pour modifier l'image de destination -->
                                    <div class="modal fade" id="formulaireModifPhoto" tabindex="-1" role="dialog" aria-labelledby="ModificationdelaPhoto" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="TitreModificationdelaPhoto">Modification de l'image qui illustre la destination</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo '../controller/controllerDestination.php?action=modifDestinationPhoto?id='.$idDestination ?>" method="POST" enctype="multipart/form-data">
                                                    <label for="<?php echo "majPhotoDestination".$idDestination ?>" > Nouvelle photo :</label>
                                                        <span><input type="file" name="modifiedImage" placeholder="bla" class="form-control h-100 " id="<?php echo "majPhotoDestination".$idDestination ?>" alt="Veillez téléverser une photo illustrant le lieu proposé" /><span>
                                                    
                                                    <button type="submit" class="btn btn-outline-primary mt-5">Enregistrer</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer align-items-center">
                                                <img id="logoModifDestination" src="../img/logoMobiliT.png">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>               
                    
                    <!-- Petite description -->
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "petiteDescription" ;}else{echo "petiteDescription". $idDestination;}?>">Description introductive</label>
                        <input type="text" class="form-control" name="petiteDescription" minlength="10" maxlength="255" id="<?php if(!$maj){echo "petiteDescription" ;}else{echo "petiteDescription". $idDestination;}?>" value="<?php if($maj){echo $dest->getPetiteDescription() ;}?>" placeholder="Veillez saisir un texte court d'introduction au lieu" alt="Veillez saisir une petite introduction du lieu présenté" >
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "descriptionDestination";}else{echo "descriptionDestination".$idDestination ;} ?>">Description du lieu</label>
                        <input type="text" class="form-control" name="description" minlength="100" maxlength="500" id="<?php if(!$maj){echo "descriptionDestination";}else{echo "descriptionDestination".$idDestination ;} ?>" value="<?php if($maj){echo $dest->getDescription() ;}?>" placeholder="Veillez décrire plus précisémment le lieu a visiter" alt="Veillez saisir description précise et détaillée du lieu à visiter" required>
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "atout1Destination" ;}else{echo "atout1Destination". $idDestination;}?>">Premier atout</label>
                        <input type="text" class="form-control" name="atout1" minlength="100" maxlength="300" id="<?php if(!$maj){echo "atout1Destination" ;}else{echo "atout1Destination". $idDestination;}?>" value="<?php if($maj){echo $dest->getAtout1() ;}?>" placeholder="Premier atout du lieu proposé" alt="Présenter le premier atout du lieu proposé en visite" required>
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "atout2Destination" ;}else{echo "atout2Destination". $idDestination;}?>">Deuxième atout</label>
                        <input type="text" class="form-control" name="atout2" minlength="100" maxlength="300" id="<?php if(!$maj){echo "atout2Destination" ;}else{echo "atout2Destination". $idDestination;}?>" value="<?php if($maj){echo $dest->getAtout2() ;}?>" placeholder="Deuxième atout du lieu proposé" alt="Présenter le deuxième atout du lieu proposé en visite" required>
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "atout3Destination" ;}else{echo "atout3Destinaton". $idDestination;}?>">Troisième atout</label>
                        <input type="text" class="form-control" name="atout3" minlength="100" maxlength="300" id="<?php if(!$maj){echo "atout3Destination" ;}else{echo "atout3Destination". $idDestination;}?>" value="<?php if($maj){echo $dest->getAtout3() ;}?>" placeholder="Troisième atout du lieu proposé" alt="Présenter le troisième atout du lieu proposé en visite" >
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "lienSiteWeb" ;}else{echo "lienSiteWeb". $idDestination;}?>">Lien vers un site web </label>
                        <input type="text" class="form-control" name="lien" maxlength="300" id="<?php if(!$maj){echo "lienSiteWeb" ;}else{echo "lienSiteWeb". $idDestination;}?>" value="<?php if($maj){echo $dest->getLien() ;}?>" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à plus d'informations pour cette destination">
                    </div>
                    <div class="form-group">
                        <label for="<?php if(!$maj){echo "extraitForum" ;}else{echo "extraitForum". $idDestination;}?>">Lien vers un extrait du forum </label>
                        <input type="text" class="form-control" name="extraitForum" maxlength="300" id="<?php if(!$maj){echo "extraitForum" ;}else{echo "extraitForum". $idDestination;}?>" value="<?php if($maj){echo $dest->getExtraitForum() ;}?>" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à un sujet du forum pertinent">
                    </div>
                    <input type="submit" class="btn btn-primary col-2 offset-5" style="background-color: #228b22;border: black;" value="<?php if(!$maj || $maj==null){ echo 'Ajouter ';}elseif($maj){echo 'Modifier';}else{};?>"></input>
                </form>
            </div>
        </div>
    
<?php } ?>
