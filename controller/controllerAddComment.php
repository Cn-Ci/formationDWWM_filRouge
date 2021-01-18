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

