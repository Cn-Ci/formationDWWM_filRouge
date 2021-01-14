<?php

    require_once('../service/ServiceDestination.php');
    require_once('../presentation/destinationPresentation.php'); 

    $destinations=ServiceDestination::serviceReseachRegion(); revcherche par région et et récupéer région dans l'url
    et l'inclure dans la div principale .

affichageDestination($destinations, $region);