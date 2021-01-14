<?php
    require_once('../service/serviceTopic.php');
    require_once('../presentation/createPost_forum.php');
/*     if (!$_SESSION) {
        header('location: ./controllerUserConnect.php?action=connexion');
    }  */

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'modify') {
            //* MODIF POST
            $id = $_GET['idPost'];
            $Topic   = ServiceTopic::serviceResearchTopicBy($id);
            $title   = $Topic->getTitreTopic();
            $content = $Topic->getContentTopic();
            RenderModifyPost($id, $title, $content);
        }
    } else {
        //* AJOUT POST
        RenderCreatePost();
    }