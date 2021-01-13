<?php 
require_once('../service/ServiceMain.php');
require_once('../presentation/main.php');

function renderRecentPost() :?Array {
    $Topics = ServiceMain::serviceGetTopicOrderByDate();
    return $Topics;
}

function checkContentLenght(String $content) :Void {
    if (strtolower(strlen($content)) >= 60) {
        $cutContent = html_entity_decode(substr($content, 0, 60) . "...");
        echo $cutContent;
    } else {
        echo html_entity_decode($content);
    }
}

getMainPage();
?>