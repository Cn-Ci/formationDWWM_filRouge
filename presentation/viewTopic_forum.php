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
                            <div id='title' class="p-3 text-center">
                                <?php echo $Topic->getTitreTopic(); ?>
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
                                                <span id='author'>Auteur : <?php echo 'test'; ?></span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-1"></div>
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