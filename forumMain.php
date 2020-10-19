<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - Acceuil</title>
        <meta charset="utf-8">
        <!-- BOOTSTRAP -->
        <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
            crossorigin="anonymous">
        <!-- JQUERY -->
        <script
            src         ="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin ="anonymous">
        </script>
        <!-- CSS -->
        <link 
            rel="stylesheet" 
            type="text/css" 
            href="mainStyle.css">
        <style>
            body{
                overflow-x:hidden;
            }
            #navBar{
                position:relative;
            }
        </style>
        <!-- TYPO -->
        <link 
            href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
            rel="stylesheet"
            type="text/css"/>
    </head>

    <body>
        <div class="container-fluid">
            <?php 
                include 'navbar.php';
                include 'SearchBarForum.php';
                $i = 1;
                //JOINTURE SQL
                //REQUEST SQL
            ?> 
            <!-- ENTETE POST -->
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-8">
                    <div id ="affichagePost" class="row mt-5">
                        <div class="col-sm-8">Titre</div>
                        <div class="col-sm-1 text-center">Auteur</div>
                        <div class="col-sm-1 text-center">Vues</div>
                        <div class="col-sm-1 text-center">Commentaires</div>
                        <div class="col-sm-1 text-center">Date</div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <!-- AFFICHAGE POST EXEMPLE 1-->
            <div class="row">
                <div class="col"></div>

                <div class="col-sm-8">
                    <div class="row post1 couleur ombre">
                        <div class="col-sm-8">Lorem ipsum dolor sit amet consectetur adipiscing elit</div>
                        <div class="col-sm-1 text-center">MrTest</div>
                        <div class="col-sm-1 text-center">25</div>
                        <div class="col-sm-1 text-center">2</div>
                        <div class="col-sm-1 text-center">05-08-2020</div>
                    </div>
                </div>

                <div class="col"></div>
            </div>
            <!-- AFFICHAGE POST EXEMPLE 2-->
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-8">
                    <div class="row post2 ombre">
                        <div class="col-sm-8">Lorem ipsum dolor sit amet consectetur adipiscing elit</div>
                        <div class="col-sm-1 text-center">MrTestos</div>
                        <div class="col-sm-1 text-center">33</div>
                        <div class="col-sm-1 text-center">1</div>
                        <div class="col-sm-1 text-center">06-08-2020</div>
                    </div>
                </div>
                <div class="col"></div>
            </div>

            <!-- AFFICHAGE POST DYNAMIQUE-->
                <?php 
                /*TODO
                if(){
                    Foreach($comments in $tab){
                            <div class="row">
                            <div class="col"></div>
            
                            <div class="col-sm-8">
                                <div class="row post-<?php echo $i; ?>">
                                    <div class="col-sm-8"><?php //echo $title;?></div>
                                    <div class="col-sm-1 text-center"><?php //echo $author;?></div>
                                    <div class="col-sm-1 text-center"><?php //echo $views;?></div>
                                    <div class="col-sm-1 text-center"><?php //echo $comments;?></div>
                                    <div class="col-sm-1 text-center"><?php //echo $date;?></div>
                                </div>
                            </div>
            
                            <div class="col"></div>
                        </div>
                        $i++;
                    }
                }
                */  
                ?> 
            <!-- BTN PAGINATION -->
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2 mt-3 text-right">
                            <button type="submit" class="btn-pagination btn btn-success color-228B22 mb-10 ombre ml-1 mr-1" id="boutonsubmit">1</button>
                            <button type="submit" class="btn-pagination btn btn-success color-228B22 mb-10 ombre ml-1 mr-1" id="boutonsubmit">2</button>
                            <button type="submit" class="btn-pagination btn btn-success color-228B22 mb-10 ombre ml-1 mr-1" id="boutonsubmit">3</button>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            
        </div>

        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
            crossorigin="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
            crossorigin="anonymous">
        </script>
        <script 
            type="text/javascript" 
            src="script.js">
        </script>
    </body>
</html>