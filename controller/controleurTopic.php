<?php 
    require_once '../service/serviceTopic.php';

    session_start();

    if (isset($_POST)) {
        if (isset($_POST['AddTopic'])) {
            if (!empty($_POST['title'])    && isset($_POST['title'])    &&
                !empty($_POST['datePost']) && isset($_POST['datePost']) && 
                !empty($_POST['content'])  && isset($_POST['content'])  &&
                !empty($_POST['nbComm'])   && isset($_POST['nbComm'])   &&
                !empty($_POST['idAuthor']) && isset($_POST['idAuthor'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = htmlentities($_POST['datePost']);
                $content   = htmlentities($_POST['content']);
                $nbComment = htmlentities($_POST['nbComm']);
                $idAuthor  = $_SESSION['id'];

                try {
                    ServiceTopic::service_addEmp($title, $datePost, $content, $nbComment, $idAuthor);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        } elseif (isset($_POST['ModifyTopic'])) {
            if (!empty($_POST['ModifiedTitle'])    && isset($_POST['ModifiedTitle'])    &&
                !empty($_POST['ModifiedDatePost']) && isset($_POST['ModifiedDatePost']) && 
                !empty($_POST['ModifiedContent'])  && isset($_POST['ModifiedContent'])  &&
                !empty($_POST['ModifiedNbComm'])   && isset($_POST['ModifiedNbComm'])   &&
                !empty($_POST['ModifiedIdAuthor']) && isset($_POST['ModifiedIdAuthor'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = htmlentities($_POST['datePost']);
                $content   = htmlentities($_POST['content']);
                $nbComment = htmlentities($_POST['nbComm']);
                $idAuthor  = $_SESSION['id'];

                try {
                    ServiceTopic::serviceUpdateTopic($title, $datePost, $content, $nbComment, $idAuthor);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }
    } elseif (isset($_GET)) {
        if ($_GET["action"] == "DeleteTopic") {   
            if (!empty($_GET['idTopic'])) {

                $idTopic = htmlentities($_GET['idTopic']);

                try {
                    ServiceTopic::serviceDeleteTopic($idTopic);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }    
            }
        } else if ($_GET["action"]=="showAllTopic") {
            try {
                ServiceTopic::serviceReseachAll();
            } catch(ServiceException $ce) {
                echo 'Error';
            }  
        }
    }
?> 