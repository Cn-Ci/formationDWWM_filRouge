<?php 
    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php');
    
    html($title="Destinations");
    navbar();
    boutonFrance();
    if(isset($_SESSION) && !empty($_SESSION) && $_SESSION['profil']=="administrateur" && isset($_SESSION['id'])){
        buttonAjout();
    }

    footer();
 
    if(isset($_GET['action']) && !empty($_GET['action'])){
        if (isset($_POST) && !empty($_POST) && $_GET['action']=="ajoutDestination") { 
            if (!empty($_POST['lieu'])              && isset($_POST['lieu'])                &&
                !empty($_POST['region'])            && isset($_POST['region'])              &&
                !empty($_POST['petiteDescription']) && isset($_POST['petiteDescription'])   &&
                !empty($_POST['description'])       && isset($_POST['description'])         &&
                !empty($_POST['atout1'])            && isset($_POST['atout1'])              &&
                !empty($_POST['atout2'])            && isset($_POST['atout2'])              && 
                !empty($_SESSION['id']) && isset($_SESSION['id'])) 
                {
               
                $lieu   = htmlentities($_POST['lieu']);
                $region = htmlentities($_POST['region']);
                $petiteDescription  = htmlentities($_POST['petiteDescription']);
                $description    = htmlentities($_POST['description']);
                $atout1    = htmlentities($_POST['atout1']);
                $atout2    = htmlentities($_POST['atout2']);
                $atout3    = htmlentities($_POST['atout3']);
                $lien      = htmlentities($_POST['lien']);
                $extraitForum   = htmlentities($_POST['extraitForum']);
                $idUser = $_SESSION['id'];
                $image=$_FILES['image']['tmp_name'];      //     
                $imageaEnvoyer = file_get_contents($image);
                
                try {
                    ServiceDestination::serviceAddDestination($id=null, $region,  $lieu,  $imageaEnvoyer,  $petiteDescription,  $description, $atout1,  $atout2,  $atout3, $lien,  $extraitForum,  $idUser) ;
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }elseif($_GET['action']=="suppDestination"){
            if (!empty($_GET['id'])) {
                
                $idDestination = htmlentities($_GET['id']);
                try {
                    ServiceDestination::serviceDelete($idDestination);
                    
                } catch(ServiceException $ce) {
                    echo 'Error';
                }    
            }
        }elseif($_GET['action']=="modifDestination") {
            if ((!empty($_POST['lieu'])             && isset($_POST['lieu'])                &&
                    !empty($_POST['region'])            && isset($_POST['region'])              &&
                    !empty($_POST['petiteDescription']) && isset($_POST['petiteDescription'])   &&
                    !empty($_POST['description'])       && isset($_POST['description'])         &&
                    !empty($_POST['atout1'])            && isset($_POST['atout1'])              &&
                    !empty($_POST['atout2'])            && isset($_POST['atout2'])              && 
                    !empty($_SESSION['id'])             && isset($_SESSION['id']))) 
                    {
                    $idDestination = $_GET['id'];
                    $lieu   = htmlentities($_POST['lieu']);
                    $region = htmlentities($_POST['region']);
                    $petiteDescription  = htmlentities($_POST['petiteDescription']);
                    $description    = htmlentities($_POST['description']);
                    $atout1    = htmlentities($_POST['atout1']);
                    $atout2    = htmlentities($_POST['atout2']);
                    $atout3    = htmlentities($_POST['atout3']);
                    $lien      = htmlentities($_POST['lien']);
                    $extraitForum   = htmlentities($_POST['extraitForum']);
                    if(isset($_POST['image']) && !empty($_POST['image'])){
                        $image=$_FILES['image']['tmp_name'];           
                        $imageaEnvoyer = file_get_contents($image);
                    }
                    
                    
                
                try {
                    if(isset($_POST['image']) && !empty($_POST['image'])){
                        ServiceDestination :: serviceUpdateDestination($idDestination, $region,  $lieu,  $imageaEnvoyer,  $petiteDescription,  $description, $atout1,  $atout2,  $atout3, $lien,  $extraitForum) ;
                    }elseif(!isset($imageaEnvoyer)){
                        ServiceDestination :: serviceUpdateDestination($idDestination, $region,  $lieu, $image=null,  $petiteDescription,  $description, $atout1,  $atout2,  $atout3, $lien,  $extraitForum) ;
                    }
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }elseif($_GET['action']=="modifDestinationPhoto") {
            if (isset($_POST) && !empty($_POST['image'])    &&
                isset($_GET)    && !empty($_GET)    && isset($_GET['id'])){
                    
                    $image=$_FILES['image']['tmp_name'];           
                    $imageaEnvoyer = file_get_contents($image);
                    echo('coucou');
                
                try {
                    ServiceDestination :: serviceUpdateDestinationPhoto($idDestination, $region,  $lieu,  $image,  $petiteDescription,  $description, $atout1,  $atout2,  $atout3, $lien,  $extraitForum, $_SESSION) ;
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
               
        }
    
    }


    