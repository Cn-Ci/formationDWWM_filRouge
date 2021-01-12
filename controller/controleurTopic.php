<?php 
/*     if (!$_SESSION) {
        header("location: ../controller/controleurMain.php");
    } */

    require_once('../service/serviceTopic.php');
    require_once('../presentation/forumMain.php');

    if (!empty($_POST)) {
        if (isset($_POST['AddTopic'])) {
            if (!empty($_POST['title'])     && isset($_POST['title'])    &&
                !empty($_POST['content'])   && isset($_POST['content'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = new DateTime('NOW');
                $content   = htmlentities($_POST['content']);
                $nbComment = 0;
                $Author    = 4; //TODO

                try {
                    ServiceTopic::serviceAddTopic($title, $datePost, $content, $nbComment, $Author);
                    $Topics = ServiceTopic::serviceReseachAll();
                    RenderForumMain($Topics);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        } elseif (isset($_POST['ModifyTopic'])) {
            if (!empty($_POST['title'])       && isset($_POST['title'])    &&
                !empty($_POST['content'])     && isset($_POST['content'])) {

                $id = $_GET['idPost'];
                $title     = htmlentities($_POST['title']);
                $datePost  = new DateTime('NOW');
                $content   = htmlentities($_POST['content']);
                $nbComment = 0; //TODO 
                $idAuthor  = 4; //TODO

                try {
                    ServiceTopic::serviceUpdateTopic($id, $title, $datePost, $content, $nbComment, $idAuthor);
                    $Topics = ServiceTopic::serviceReseachAll();
                    RenderForumMain($Topics);
                } catch(ServiceException $ce) {
                    echo 'Error';
                }
            }
        }
    } elseif (!empty($_GET)) {
        if (isset($_GET['action'])) {
            if ($_GET["action"] == "DeleteTopic") {   
                if (!empty($_GET['idPost'])) {

                    $idTopic = htmlentities($_GET['idPost']);
                    
                    try {
                        ServiceTopic::serviceDeleteTopic($idTopic);
                        $Topics = ServiceTopic::serviceReseachAll();
                        RenderForumMain($Topics);
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
            }
        } else {
            if ($_GET["filter"]) {
                $TopicsFiltered = filter($_GET["filter"]);
                echo json_encode($TopicsFiltered);
            }
        }
    }

    function filter(string $filter) :?Array {
        $TopicsReturned = null;

        if($filter) {
            if ($filter == 'Date') {
                $TopicsReturned = ServiceTopic::serviceSearchByDate();
            } else if ($filter == 'NombreDeCommentaire') {
                $TopicsReturned = ServiceTopic::serviceSearchByNbComments();
            }
        }

        return $TopicsReturned;

    }
?> 