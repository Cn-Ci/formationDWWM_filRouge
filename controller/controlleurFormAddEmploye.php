<?php 
    require_once('../presentation/formAdd_Personnel.php');
    include_once('../service/ServiceException.php');
    include_once('../service/ServicePersonnel.php');
    

    if (isset($_GET) && isset($_GET['action'])  && !empty ($_GET['action'])) {
        if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action']=="modifier") {
            try{
                
                $personnel = ServicePersonnel :: serviceResearchPersonnelBy($_GET['id']);
                renderForm($personnel);

            } 
            catch (ServiceException $se){
                renderAddForm($se->getMessage(), $se->getCode());
            }  
        }elseif($_GET['action']=="ajouter"){

            renderForm($personnel=null);
        }
    } 
    
    
    
?> 