<?php 


    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php');

          

               
    $destinations=ServiceDestination::serviceReseachAll();
    html($title="Destinations");
    navbar();
    boutonFrance();
    affichageDestination($destinations, $region="Auvergne-Rhône-Alpes");
    // if(isset($_SESSION) && $_SESSION['profil']= "administrateur"){
        buttonAjout();
    // }
    footer();
    
    if(isset($_POST) && !empty($_POST) && isset($_GET['action']) && !empty($_GET['action'])){
        if ($_GET['action']=="ajoutDestination") {
            if (!empty($_POST['lieu'])       && isset($_POST['lieu'])    &&
                !empty($_POST['region'])     && isset($_POST['region'])  &&
                !empty($_POST['image'])     && isset($_POST['image'])  &&
                !empty($_POST['petiteDescription'])     && isset($_POST['petiteDescription'])  &&
                !empty($_POST['description'])     && isset($_POST['description'])  &&
                !empty($_POST['atout1'])     && isset($_POST['atout1'])  &&
                !empty($_POST['atout2'])     && isset($_POST['atout2']))  
                //&& !empty($_SESSION['id']) && isset($_SESSION['id']) 
                {
                $_SESSION['id']=4;
                $lieu   = htmlentities($_POST['lieu']);
                $region = htmlentities($_POST['region']);
                $image= $_POST['image'];
                $petiteDescription  = htmlentities($_POST['petiteDescription']);
                $description    = htmlentities($_POST['description']);
                $atout1    = htmlentities($_POST['atout1']);
                $atout2    = htmlentities($_POST['atout2']);
                $atout3    = htmlentities($_POST['atout3']);
                $lien      = htmlentities($_POST['lien']);
                $extraitForum   = htmlentities($_POST['extraitForum']);
                $idUser = $_SESSION['id'];

                
                try {
                    ServiceDestination::serviceAddDestination($id=null, $region,  $lieu,  $image,  $petiteDescription,  $description, $atout1,  $atout2,  $atout3, $lien,  $extraitForum,  $idUser) ;
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }   
    }elseif(isset($_GET['action']) && !empty($_GET['action']) && $_GET['action']=="suppDestination"){
        if (!empty($_GET['id'])) {
            echo($_GET['id']);
            $idDestination = htmlentities($_GET['id']);
            
            try {
                ServiceDestination::serviceDelete($idDestination);
                
            } catch(ServiceException $ce) {
                echo 'Error';
            }    
        }
    }elseif(isset($_GET['action']) && !empty($_GET['action']) && $_GET['action']=="majDestination"){
        echo('chouchou');
    }
