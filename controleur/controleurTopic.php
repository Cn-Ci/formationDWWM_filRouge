<?php 
    require_once '../service/serviceTopic.php';

    session_start();

    if (isset($_POST)) {
        if (isset($_POST['AddTopic'])) {
            # code...
        } elseif (isset($_POST['ModifyTopic'])) {
            # code...
        }
    } elseif (isset($_GET)) {
        if ($_GET["action"] == "DeleteTopic") {   
            if (!empty($_GET['idTopic'])) {
                try {
                    # code...
                } catch(ServiceException $ce) {
                    # code...
                }    
            }
        } else if ($_GET["action"]=="showAllTopic") {
            try {
                # code...
            } catch(ServiceException $ce) {
                # code...
            }  
        }
    }
?> 