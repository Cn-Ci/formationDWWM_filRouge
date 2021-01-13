<?php 
    require_once '../service/serviceTopic.php';
    require_once '../service/serviceViewTopic.php';
    require_once '../presentation/viewTopic_forum.php';

    $Topic = ServiceTopic::serviceResearchTopicBy($_GET['idPost']);
    $author = ServiceViewTopic::searchUserById($Topic->getIdAuthor());
    renderViewPost($Topic, $author);
?> 