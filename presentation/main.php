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
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tempus velit non elit bibendum, at suscipit arcu dignissim. Pellentesque viverra neque quis.</h5>
                            <h5>Cras tempus velit non elit bibendum, at suscipit arcu dignissim. Pellentesque viverra.</h5>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row text-center pb-5">
                        <div class="col-lg-2"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/valise.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">L'organisation</span></h3>
                            <p class="text-justify">Donec sed iaculis sem. Proin ac lorem vel tortor viverra luctus in a quam. Suspendisse sed leo nec est ultricies consequat. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/plane.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">Les destinations</span></h3>
                            <p class="text-justify">Donec sed iaculis sem. Proin ac lorem vel tortor viverra luctus in a quam. Suspendisse sed leo nec est ultricies consequat. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                            <img class="img_150w_150h" src="../img/forumImage.png" alt=""><br>
                            <h3 class="mt-5"><span class="couleur">Blabla</span></h3>
                            <p class="text-justify">Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                        </div>
                        <div class="col-lg-2"></div>    
                    </div> 
                </div>

                <!----------------------------------------------------------------------PAGE 3------------------------------------------------------------------------>
                <!-- BUTTON ADD PERSONNEL (FOR ADMIN) -->
                <div id="page3" class="container-fluid ombre">
                    <div class="row text-center mt-2">
                        <div class="col-lg-2"></div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 pl-5 pr-5 personnel">
                            <img class="img_150w_150h imagePersonnel" src="../img/man.png" alt="Pesonnel2"><br>
                            <h3>
                                <strong>Nom Prénom<br>
                                Personnel 2</strong>
                            </h3>
                            <p class="couleur mt-3 descriptionPersonne">
                                Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.
                            </p><br>
                            <ul class="social-network social-circle">
                                <li><a href ="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href ="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href ="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 pl-5 pr-5 personnel">
                            <img class="img_150w_150h imagePersonnel" src="../img/man.png" alt="Pesonnel2"><br>
                            <h3>
                                <strong>Nom Prénom<br>
                                Personnel 2</strong>
                            </h3>
                            <p class="couleur mt-3 descriptionPersonne">
                                Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.
                            </p><br>
                            <ul class="social-network social-circle">
                                <li><a href ="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href ="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href ="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 pl-5 pr-5 personnel">
                            <img class="img_150w_150h imagePersonnel" src="../img/man.png" alt="Pesonnel3"><br>
                            <h3>
                                <strong>Nom Prénom<br>
                                Personnel 3</strong>
                            </h3>
                            <p class="couleur mt-3 descriptionPersonne">
                                Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.
                            </p><br>
                            <ul class="social-network social-circle">
                                <li><a href ="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href ="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href ="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 pl-5 pr-5 personnel">
                            <img class="img_150w_150h imagePersonnel" src="../img/man.png" alt="Pesonnel4"><br>
                            <h3>
                                <strong>Nom Prénom<br>
                                Personnel 4</strong>
                            </h3>
                            <p class="couleur mt-3 descriptionPersonne">
                                Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.
                            </p><br>
                            <ul class="social-network social-circle">
                                <li><a href ="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href ="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href ="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2"></div>    
                    </div>
                </div>

                <!----------------------------------------------------------------------PAGE 4------------------------------------------------------------------------>
                <div id="page4" class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div id="apercuForum" class="col-sm-12 col-lg-8">
                            <div class="row">

                                <?php $RecentPost = renderRecentPost(); ?> 

                                <div class="col-sm-12 col-lg-12 col-xl-6 row" style="padding-right: 0px !important">
                                    <!--POST 0-->
                                    <div class="col-12 postRecent row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 mt-3">
                                            <img class="ImgPostForum" src="../img/bretagne.jpg" alt="Apercu image post forum">
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mt-3 font">
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

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mt-3 font">
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

                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 mt-3 font">
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
                                <div id="imgBlockApercuForum" class="col-sm-12 col-lg-12 col-xl-6 row">
                                    <img id="ImgApercuForum" src="../img/paysbasque.jpg" alt="Aperçu Forum">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
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