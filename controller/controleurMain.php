<?php 
require_once('../service/ServiceMain.php');
require_once('../presentation/main.php');

function renderRecentPost() :?Array {
    $Topics = ServiceMain::serviceGetTopicOrderByDate();
    return $Topics;
}

function checkContentLenght(String $content) :Void {
    if (strlen($content) > 100) {
        $cutContent = html_entity_decode(substr($content, 0, 75) . "...");
        echo $cutContent;
    } else {
        echo html_entity_decode($content);
    }
}

getMainPage();
?>