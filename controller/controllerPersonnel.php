<?php 
    require_once('../presentation/personnelPresentation.php');
    require_once('../service/ServicePersonnel.php');

    
    
    

        if(empty($_GET)){
            $personnels = ServicePersonnel :: searchAllPersonnels();
            afficherPersonnel($personnels);
            
        }elseif(isset($_GET)    && !empty($_GET)    &&
                isset($_GET['action'])  && $_GET['action']=='supprimer' &&
                isset($_GET['id'])){
                    $id= $_GET['id'];

                ServicePersonnel :: serviceDeletePersonnel($id);
                header('../controller/controleurMain.php');
                }
            
         