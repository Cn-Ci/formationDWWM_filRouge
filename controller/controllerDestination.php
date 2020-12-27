<?php 
    require_once('../service/serviceDestination.php');
    require_once('../presentation/destinationPresentation.php');

          

               
                    $destinations=ServiceDestination::serviceReseachAll();
                    html($title="Destinations");
                    navbar();
                    boutonFrance();
                    affichageDestination($destinations, $ouest);
                    if(isset($_SESSION) && $_SESSION['profil']= "administrateur"){
                        buttonAjout();
                    }
                    footer();

