<?php 
    require_once('../service/serviceTopic.php');
    require_once('../presentation/forumMain.php');

    if (!empty($_POST)) {
        if (isset($_POST['AddTopic'])) {
            if (!empty($_POST['title'])     && isset($_POST['title'])    &&
                !empty($_POST['content'])   && isset($_POST['content'])  &&
                !empty($_SESSION['pseudo']) && isset($_SESSION['pseudo'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = new DateTime('NOW');
                $content   = htmlentities($_POST['content']);
                $nbComment = 0;
                $Author    = $_SESSION['pseudo'];

                try {
                    ServiceTopic::service_addEmp($title, $datePost, $content, $nbComment, $Author);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        } elseif (isset($_POST['ModifyTopic'])) {
            if (!empty($_POST['title'])       && isset($_POST['title'])    &&
                !empty($_POST['datePost'])    && isset($_POST['datePost']) && 
                !empty($_POST['content'])     && isset($_POST['content'])  &&
                !empty($_POST['nbComm'])      && isset($_POST['nbComm'])   &&
                !empty($_SESSION['username']) && isset($_SESSION['username'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = new DateTime('NOW');
                $content   = htmlentities($_POST['content']);
                $nbComment = 0; //? GET NB COMMENT
                $idAuthor  = $_SESSION['id'];

                try {
                    ServiceTopic::serviceUpdateTopic($title, $datePost, $content, $nbComment, $idAuthor);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }
    } elseif (!empty($_GET)) {
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
                $Topics = ServiceTopic::serviceReseachAll();
                RenderForumMain($Topics);
            } catch(ServiceException $ce) {
                RenderForumMain($Topics, $ce);
            }  
        } else if ($_GET["filter"]) {
            $TopicsFiltered = filter($_GET["filter"]);
            echo json_encode($TopicsFiltered);
        }
    }

    function filter(string $filter) :?Array {
        $TopicsReturned = null;

        if($filter) {
            if ($filter == 'Date') {
                $TopicsReturned = ServiceTopic::serviceSearchByDate();
            } else if ($filter == 'Nombre de commentaire') {
                $TopicsReturned = ServiceTopic::serviceSearchByNbComments();
            }
        }

        return $TopicsReturned;

    }
?> 