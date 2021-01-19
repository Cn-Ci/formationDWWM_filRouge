<?php 
    function renderViewPost(Topic $Topic, Object $Author, Array $commentaires = null) {
        
        ?>
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>MOBILI'T - Forum</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta charset="utf-8">
                <!-- BOOTSTRAP -->
                <link 
                    rel="stylesheet" 
                    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                    crossorigin="anonymous">
                <!-- CSS -->
                <link 
                    rel="stylesheet" 
                    type="text/css" 
                    href="../css/viewPost.css">
                <!-- TYPO -->
                <link 
                    href="https://fonts.cdnfonts.com/css/caviar-dreams" 
                    rel="stylesheet">
                <link 
                    href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 
                    rel="stylesheet">
            </head>

            <body>
                <div class="container-fluid">
                    <?php include '../navbar.php';?>
                    <div class="row">
                        <div class="col-lg-2" id="buttonBack">
                            <a href="../controller/controleurTopic.php?action=showAllTopic">
                                <button type="submit" class="btn btn-success color-228B22 text-center pl-5 pr-5" id="boutonsubmit">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    </svg> Retour
                                </button>
                            </a>
                        </div>
                        <div class="col"></div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>

                        <div id="blockContent" class="col p-0">
                            <div id='title' class="p-3">
                                <div>
                                    <?php 
                                        echo $Topic->getTitreTopic();
                                        
                                        /*  if ($_SESSION['profil'] == 'Administrateur' || $Author['pseudo'] == $_SESSION['pseudo']) {
                                            # code...
                                        } */
                                        ?>

                                    <button id="options" data-toggle="modal" data-target="#OptionsModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div id='content' class="p-3">
                                <?php echo html_entity_decode($Topic->getContentTopic()); ?>
                            </div>

                            <div id='infoBlock' class='p-1'>
                                <p id='info'>
                                    <span>Créer le : <?php echo $Topic->datetimeToString($Topic->getDateTopic()); ?></span>
                                    <span id='author'>Auteur : <?php echo $Author->getPseudo() ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="col-1"></div>
                    </div>

                    <!-- ESPACE FIND ALL COMMENTAIRES -->
                    <?php 
                        if ($commentaires) {
                            foreach ($commentaires as $commentaire) {
                                ?>
                                <div class="row">
                                    <div class="col-1"></div>

                                    <div id="blockCommentaire" class="col mt-3">
                                        <div id='commentaire' class="p-3">
                                            <?php echo $commentaire->getContenuComm(); ?>
                                        </div>

                                        <div id='infoBlock' class='p-1'>
                                            <p id='info'>
                                                <span>Créer le : <?php echo $commentaire->datetimeToString($commentaire->getDate()); ?></span>
                                                <span id='author'>Auteur : <?php echo getUsernameById($commentaire->getIdAuthor()); ?></span>
                                                <button id="options" data-toggle="modal" data-target="#OptionsCommentModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                                    </svg>
                                                </button>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-1"></div>
                                </div>

                                <!-- MODAL OPTIONS COMMENTAIRES -->
                                <div class="modal fade" id="OptionsCommentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">options</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body text-center">
                                                <div class="m-2">
                                                    <a class ="btn btn-danger" href="../controller/controllerAddComment.php?action=deleteComm&idComm=<?php echo $commentaire->getIdComm()?>&idPost=<?php echo $Topic->getIdTopic()?>"> 
                                                        Supprimer
                                                    </a>
                                                </div>

                                                <div class="m-2">
                                                    <a class ="btn btn-success" href="../controller/controllerAddComment.php?action=modifyComm&idComm=<?php echo $commentaire->getIdComm()?>"> 
                                                        Modifier
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>

                    <!-- ESPACE AJOUT COMMENTAIRE -->
                    <div class="row mt-3">
                        <div class="col-1"></div>

                        <div class="col p-0">
                            <a href="#messageBox" class='btn btn-success mb-3' id="toggleComment">Répondre</a>
                            <div id="messageBox" style="display : none">
                                <form action='controllerAddComment.php?idPost=<?php echo $_GET['idPost']; ?>' method='POST'>
                                    <div>
                                        <textarea style='height: 50px; width: 100%;' name='comment' class='ChampAvis' placeholder='Ma réponse...' required></textarea>
                                    </div>
                                    
                                    <input type='submit' class='btn btn-success mb-3' name='addComment' value=' + Publier'>
                                </form>
                            
                            </div>
                        </div>
                        
                        <div class="col-1"></div>
                    </div>

                    <!-- MODAL OPTIONS TOPICS -->
                    <div class="modal fade" id="OptionsModal" tabindex="-1" role="dialog" aria-labelledby="TopicModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">options</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body text-center">
                                    <div class="m-2">
                                        <a class ="btn btn-danger" href="../controller/controleurTopic.php?action=DeleteTopic&idPost=<?php echo $Topic->getIdTopic()?>"> 
                                            Supprimer
                                        </a>
                                    </div>

                                    <div class="m-2">
                                        <a class ="btn btn-success" href="../controller/controlleurCreatePostForum.php?action=modify&idPost=<?php echo $Topic->getIdTopic()?>"> 
                                            Modifier
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <script
                    src         ="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin ="anonymous">
                </script>
                <script
                    type="text/javascript"  
                    src="../assets/scriptViewTopic.js">
                </script>
            </body>
        </html><?php 
    }
?>