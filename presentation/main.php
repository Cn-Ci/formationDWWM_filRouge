<?php 
    function getMainPage() :Void {
        ?> 
        <!DOCTYPE html>
        <html lang="fr">
            <head>
                <title>MOBILI'T - Acceuil</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta charset="utf-8">
                <!-- BOOTSTRAP -->
                <link 
                    rel="stylesheet" 
                    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                    crossorigin="anonymous">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <!-- CSS -->
                <link 
                    rel="stylesheet" 
                    type="text/css" 
                    href="../css/mainStyle.css">
                <link 
                    rel="stylesheet" 
                    type="text/css" 
                    href="../assets/footerStyle.css">
                <!-- TYPO -->
                <link 
                    href="https://fonts.cdnfonts.com/css/caviar-dreams" 
                    rel="stylesheet">
                <link 
                    href="https://fonts.googleapis.com/css?family=Cinzel" 
                    rel="stylesheet">
                <link 
                    href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 
                    rel="stylesheet">
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            </head>

            <body>
                <!----------------------------------------------------------------------PAGE 1------------------------------------------------------------------------->
                <div id="page1" class="container-fluid">
                    <?php include_once '../navbar.php';?>
                    <div class="row">
                        <div class="col-sm-12 col-lg-1"></div>
                        <div id="blocLogo" class="col-sm-12 col-md-6 col-lg-4">
                            <div>
                                <p class="whiteColor" id="mdSlogan">MOBILI'T</p>
                            </div>
                            <div>
                                <p class="whiteColor" id="sousSlogan">Idées & Conseils voyage pour personnes en situation de handicap</p>
                            </div>
                            <a href="#">
                                <div id="showDBlock">
                                    <p class="whiteColor" id="showDestination">Voir les Destinations</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a id="bottom" href="#page2" onclick="goToPage2()">
                        <div id="blocOverlay" class="row">
                            <div id="test" class="col-sm-12 footer whiteColor"><p id="discoverSite">DÉCOUVRIR NOTRE SITE</p><div id="triangle"></div></div>
                        </div>
                    </a>
                </div>

                <!----------------------------------------------------------------------PAGE 2------------------------------------------------------------------------>
                <div id="page2" class="container-fluid ombre">
                    <div class="row text-center" id="EntetePresentation">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <h1 class="couleur">MOBILI'T QU'EST-CE-QUE C'EST ?</h1>
                            <h5>Mobili'T est une société qui a pour but d'aider les personnes en situation de handicap ! </h5>
                            <h5>Quelque soit votre handicap, nous somme là pour vous ! </h5>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row text-center pb-5">
                        <div class="col-lg-2"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/valise.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">L'organisation</span></h3>
                            <p class="text-justify">Mobili'T permet de vous guider dans les démarches d'un voyage, de la prise de décision, de la destination en passant par les transports ou vos besoins, jusqu'a votre retour ! Nous somme là votre ecoute pour toutes vos questions ! </p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/plane.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">Les destinations</span></h3>
                            <p class="text-justify">Mobili'T met à disposition des destinations adaptés à votre situation de handicap, nos lieux sont soignement choisis afin que vous ayez tout le matériels dont vous avez besoin et vous pouvez ainsi participer à toutes les activités proposés par ces lieux de vacances. Nous somme là pour vous faire vivre une expérience inoubliable !</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/forumImage.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">Avis et Commentaires</span></h3>
                            <p class="text-justify">Mobili'T vous permet de commenter votre destination, de laisser un avis positif ou négatif sur votre séjour, sur la qualité de nos choix de destination ou sur le lieux de vos vacances. Vous pouvez également échanger sur votre expérience afin de donner envie aux prochains vacanciers, ou de les conseillers et ainsi vous pouvez aiderà votre tour les personnes dans une situation de handicap similaire à la votre ou non et répondre à leurs questions ! Nous sommes là aussi pour vous aider ! </p>
                        </div>
                        <div class="col-lg-2"></div>    
                    </div> 
                </div>


                <!----------------------------------------------------------------------PAGE 3------------------------------------------------------------------------>
                <!-- BUTTON ADD PERSONNEL (FOR ADMIN) -->
                <div id="page3" class="container-fluid ombre">
                    
                        <?php include('../controller/controllerPersonnel.php') ?>
                        <?php if(isset($_SESSION) && !empty($_SESSION) && $_SESSION['profil']=='administrateur'){?>
                            <a href='../controller/controlleurFormAddEmploye.php?action=ajouter'>
                                <button type="submit" class="btn btn-warning col-1 col-lg-3 text-center ml-5 "><i class="fas fa-user-plus"></i>  </button>           
                            </a>
                        <?php } ?>
                </div>

                <!----------------------------------------------------------------------PAGE 4------------------------------------------------------------------------>
                <div id="page4" class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div id="apercuForum" class="col-sm-12 col-lg-10">
                            <div class="row">

                                <?php $RecentPost = renderRecentPost(); ?> 

                                <div class="col-sm-12 col-lg-12 col-xl-6 p-0">
                                    <!--POST 0-->
                                    <div class="col-12 postRecent row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3">
                                            <img class="ImgPostForum" src="../img/bretagne.jpg" alt="Apercu image post forum">
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 ml-3 mt-3 mb-3 font">
                                            <h5>
                                                <?php echo $RecentPost[0]->getTitreTopic(); ?>
                                            </h5>

                                            <p>
                                                <?php checkContentLenght($RecentPost[0]->getContentTopic()); ?>
                                            </p>

                                            <h6>
                                                <?php echo $RecentPost[0]->datetimeToString($RecentPost[0]->getDateTopic()); ?>
                                            </h6>
                                        </div>
                                    </div>

                                    <!--POST 1-->
                                    <div class="col-12 postRecent row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3">
                                            <img class="ImgPostForum" src="../img/vignoble.jpg" alt="Apercu image post forum">
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 ml-3 mt-3 mb-3 font">
                                            <h5>
                                                <?php echo $RecentPost[1]->getTitreTopic(); ?>
                                            </h5>

                                            <p>
                                                <?php checkContentLenght($RecentPost[1]->getContentTopic()); ?>
                                            </p>

                                            <h6>
                                                <?php echo $RecentPost[1]->datetimeToString($RecentPost[1]->getDateTopic()); ?>
                                            </h6>
                                        </div>
                                    </div>

                                    <!--POST 2-->
                                    <div class="col-12 postRecent row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3">
                                            <img class="ImgPostForum" src="../img/vallee.jpg" alt="Apercu image post forum">
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 ml-3 mt-3 mb-3 font">
                                            <h5>
                                                <?php echo $RecentPost[2]->getTitreTopic(); ?>
                                            </h5>

                                            <p>
                                                <?php checkContentLenght($RecentPost[2]->getContentTopic()); ?>
                                            </p>

                                            <h6>
                                                <?php echo $RecentPost[2]->datetimeToString($RecentPost[2]->getDateTopic()); ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div id="imgBlockApercuForum" class="col-sm-12 col-lg-12 col-xl-6 p-0">
                                    <img id="ImgApercuForum" src="../img/paysbasque.jpg" alt="Aperçu Forum">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------------------------------------------------------------------FOOTER------------------------------------------------------------------------------->
                <footer>
                    <?php include_once '../templates/footer.php'; ?>
                </footer>


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
                <!-- JQUERY -->
                <script
                    src         ="https://code.jquery.com/jquery-3.3.1.min.js"
                    integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin ="anonymous">
                </script>
                <script 
                    type="text/javascript" 
                    src="../script.js">
                </script>
            </body>
        </html><?php 
    }
?>