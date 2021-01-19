<?php
    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php'); 
    
    session_start();

    
    $session= $_SESSION;

    //comment récupérer 
      if(isset($_GET) && !empty($_GET) && isset($_GET['region'])){
        $region = $_GET['region'];
        $destinations=ServiceDestination::serviceResearchByRegion($region);
        if(!empty($destinations)){
           affichageDestination($destinations, $region, $session); 
        }else{
            echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Il n\'y a pas encore de destinations enregistrées pour cette région </h4>
            <p>Si vous souhaitez partager avec nous une expérience de vacances handitourisme, n\'hésitez pas à nous contacter !<br>
            Notre équipe fera le maximum pour relayer au plus vite les informations sur le site.</p>
            <hr>
            <p class="mb-0">A très bientôt sur <strong>MobiliT</strong></p>
          </div>';
        }
    }
    
?>
    <script 
        type="text/javascript" 
        src="../assets/scriptDestination.js">
    </script>
    