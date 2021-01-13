<?php 


    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php');
    
    
    if(isset($_GET) && isset($_GET['region']) && !empty($_GET['region'])){
        $region= $_GET['region'];
        affichageDestination($destinations, $region);
   }