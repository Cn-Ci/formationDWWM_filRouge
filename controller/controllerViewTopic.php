<?php 
    require_once '../service/serviceTopic.php';
    require_once '../service/serviceViewTopic.php';
    require_once '../service/serviceCommentTopic.php';
    require_once '../presentation/viewTopic_forum.php';

    $Topic = ServiceTopic::serviceResearchTopicBy($_GET['idPost']);
    $author = ServiceViewTopic::searchUserById($Topic->getIdAuthor());
    $comments = serviceCommentTopic::ServiceSearchAllCommentByIdTopic($_GET['idPost']);
    if ($comments) {
        renderViewPost($Topic, $author, $comments);
    } else {
        renderViewPost($Topic, $author);
    }

    function getUsernameById(Int $id) {
        $rs = ServiceViewTopic::searchUserById($id);
        return $rs->getPseudo();
    }
?> 