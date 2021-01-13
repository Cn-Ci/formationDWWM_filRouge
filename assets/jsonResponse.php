
<?php
    require_once('../service/serviceTopic.php');

if ($_GET["filter"]) {
    $TopicsFiltered = filter($_GET["filter"]);
    echo json_encode($TopicsFiltered);
}

function filter(string $filter) :?Array {
    $TopicsReturned = null;

    if($filter) {
        if ($filter === 'Date') {
            $TopicsReturned = ServiceTopic::serviceSearchByDate();
        } else if ($filter === 'NombreDeCommentaire') {
            $TopicsReturned = ServiceTopic::serviceSearchByNbComments();
        }
    }

    return $TopicsReturned;

}
