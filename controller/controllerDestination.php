<?php 
    require_once('../service/serviceDestination.php');
    require_once('../presentation/destinationPresentation.php');

    if (!isset($_POST) && !isset($_GET)) && $_SESSION="ROLE_USER" {
        

                try {
                    ServiceTopic::service_addEmp($title, $datePost, $content, $nbComment, $Author);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }