<?php 

require_once '../service/serviceCommentTopic.php';

if (isset($_POST) && isset($_POST['addComment'])) {
    $idAuthor      = 7;
    $comment       = $_POST['comment'];
    $date          = new DateTime('NOW');
    $idTopicParent = $_GET['idPost'];

    ServiceCommentTopic::addComment($idAuthor, $comment, $date, $idTopicParent);
    header("location: ../controller/controllerViewTopic.php?idPost=$idTopicParent");
}

if (isset($_GET['action'])){
    if($_GET['action'] == 'modifyComm') {
        $idComm        = $_GET['idComm'];
        $idTopicParent = $_GET['idPost'];
        ServiceCommentTopic::modifyComment($idComm);
        echo "
            <div class='alert alert-success' role='alert'>
                This is a success alert—check it out!
            </div>"
        ;
        header("location: ../controller/controllerViewTopic.php?idPost=$idTopicParent");
    } elseif ($_GET['action'] == 'deleteComm') {
        $idComm        = $_GET['idComm'];
        $idTopicParent = $_GET['idPost'];
        ServiceCommentTopic::deleteComment($idComm, $idTopicParent);
        header("location: ../controller/controllerViewTopic.php?idPost=$idTopicParent");
    } else {
        die();
    }
}

