<?php 
    require_once('../service/serviceTopic.php');
    require_once('../presentation/forumMain.php');
//on détermine la page où on est
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage= 1;
}



//nombre article total
$db= new PDO('mysql:host=localhost;dbname=cnciprrcnci;charset=utf8', 'root', '');
$sql    = 'SELECT count(*) as nbTopic from `topic`;';
$query  = $db->prepare($sql);
$query->execute();
$resultat= $query->fetch() ;

$nbTopic = (int) $resultat['nbTopic'];


//nombre article par page
$topicParPage = 10;    

//calcul du nombre de pages
$pages = ceil($nbTopic/ $topicParPage);

//calcul premier topic de la page
$premierTopic = ($currentPage * $topicParPage) - $topicParPage;


//tous les topics
$sql    = 'SELECT * from `topic` order by `idTopic` DESC LIMIT :premierTopic , :topicParPage ;';
$query  = $db->prepare($sql);
$query->bindParam(':premierTopic', $premierTopic, PDO::PARAM_INT);
$query->bindParam(':topicParPage', $topicParPage, PDO::PARAM_INT);
$query->execute();
$topics= $query->fetchAll(PDO::FETCH_ASSOC) ;



    if (!empty($_POST)) {
        if (isset($_POST['AddTopic'])) {
            if (!empty($_POST['title'])     && isset($_POST['title'])    &&
                !empty($_POST['content'])   && isset($_POST['content'])) {

                $title     = htmlentities($_POST['title']);
                $datePost  = new DateTime('NOW');
                $content   = htmlentities($_POST['content']);
                $nbComment = 0;
                $Author    = $_SESSION['id'];

                try {
                    ServiceTopic::serviceAddTopic($title, $datePost, $content, $nbComment, $Author);
                    $Topics = ServiceTopic::serviceReseachAll();
                    echo "
                        <div class='alert alert-danger m-5' role='alert'>
                            Le topic à été publié avec succès.
                        </div>"
                    ;
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
                $nbComment = ServiceTopic::serviceResearchTopicBy($id)->getNbComm();
                $idAuthor  = $_SESSION['id'];

                try {
                    ServiceTopic::serviceUpdateTopic($id, $title, $datePost, $content, $nbComment, $idAuthor);
                    $Topics = ServiceTopic::serviceReseachAll();
                    echo "
                            <div class='alert alert-success m-5' role='alert'>
                                Le topic à été modifié avec succès.
                            </div>"
                        ;
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
                        echo "
                            <div class='alert alert-danger m-5 role='alert'>
                                Le topic à été supprimé avec succès.
                            </div>"
                        ;
                        RenderForumMain($Topics);
                    } catch(ServiceException $ce) {
                        echo 'Error';
                    }    
                }
             }else if ($_GET["action"]=="showAllTopic") {
                try {
                    
                } catch(ServiceException $ce) {
                    RenderForumMain($Topics, $ce);
                }  
            }
        }
    }

    // $Topics = ServiceTopic::serviceReseachAll();
    RenderForumMain($topics, $e=null,$currentPage, $pages);
    

    
?> 