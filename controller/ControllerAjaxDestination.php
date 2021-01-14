<?php
    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php');

    $destinations=ServiceDestination::serviceReseachAll();
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
                                         if(isset($_SESSION) && isset($_SESSION['id']) && $_SESSION['id']==$dest->getIdUser())
                                        {  
                                                    $maj=true;
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
?>