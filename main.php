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
        <link 
            rel="stylesheet" 
            type="text/css" 
            href="footerStyle.css">
        <!-- TYPO -->
        <link 
            href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
            rel="stylesheet"
            type="text/css"/>
        <link 
            href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
            rel="stylesheet"
            type="text/css"/>
        <link 
            href="https://fonts.cdnfonts.com/css/caviar-dreams" 
            rel="stylesheet">
        <link 
            href="https://fonts.googleapis.com/css?family=Cinzel" 
            rel="stylesheet">
        <link 
            href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" 
            rel="stylesheet">
    </head>

    <body>
        <!----------------------------------------------------------------------PAGE 1------------------------------------------------------------------------->
        <div id="page1" class="container-fluid">
            <?php include_once 'navbar.php';?>
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
                    <img class="img_150w_150h" src="img/valise.png" alt=""><br>
                    <h3 class="mt-5"><span class="couleur">L'organisation</span></h3>
                    <p class="text-justify">Donec sed iaculis sem. Proin ac lorem vel tortor viverra luctus in a quam. Suspendisse sed leo nec est ultricies consequat. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                    <img class="img_150w_150h" src="img/plane.png" alt=""><br>
                    <h3 class="mt-5"><span class="couleur">Les destinations</span></h3>
                    <p class="text-justify">Donec sed iaculis sem. Proin ac lorem vel tortor viverra luctus in a quam. Suspendisse sed leo nec est ultricies consequat. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 mt-5">
                    <img class="img_150w_150h" src="img/forumImage.png" alt=""><br>
                    <h3 class="mt-5"><span class="couleur">Blabla</span></h3>
                    <p class="text-justify">Proin ac lorem vel tortor viverra luctus in a quam. Donec ornare ligula ut nulla ornare semper. Ut efficitur velit sit amet purus bibendum, a rutrum ex congue. Sed rhoncus arcu diam, in mattis erat rhoncus quis. In elementum egestas purus a porta.</p>
                </div>
                <div class="col-lg-2"></div>    
            </div> 
        </div>

        <!----------------------------------------------------------------------PAGE 3------------------------------------------------------------------------>
        <div id="page3" class="container-fluid ombre">
            <div class="row text-center mt-2">
                <div class="col-lg-2"></div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-2 pl-5 pr-5 personnel">
                    <img class="img_150w_150h imagePersonnel" src="img/man.png" alt="Pesonnel2"><br>
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
                    <img class="img_150w_150h imagePersonnel" src="img/man.png" alt="Pesonnel2"><br>
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
                    <img class="img_150w_150h imagePersonnel" src="img/man.png" alt="Pesonnel3"><br>
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
                    <img class="img_150w_150h imagePersonnel" src="img/man.png" alt="Pesonnel4"><br>
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
                <div id="apercuForum" class="col-lg-8 mt-5">
                    <div class="row">
                        <div class="col-lg-6 row" style="padding-right: 0px !important">
                            <div class="col-lg-12 postRecent row">
                                <div class="col-sm-4 mt-3"><img class="ImgPostForum" src="img/bretagne.jpg" alt="Apercu image post forum"></div>
                                <div class="col-sm-8 mt-3"><h5>Sujet</h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur </p><h6>Date:Heure</h6></div>
                            </div>
                            <div class="col-lg-12 postRecent row">
                                <div class="col-sm-4 mt-3"><img class="ImgPostForum" src="img/vignoble.jpg" alt="Apercu image post forum"></div>
                                <div class="col-sm-8 mt-3"><h5>Sujet</h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur </p><h6>Date:Heure</h6></div>
                            </div>
                            <div class="col-lg-12 postRecent row">
                                <div class="col-sm-4 mt-3"><img class="ImgPostForum" src="img/vallee.jpg" alt="Apercu image post forum"></div>
                                <div class="col-sm-8 mt-3"><h5>Sujet</h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur </p><h6>Date:Heure</h6></div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="padding-left: 0px !important">
                            <img id="ImgApercuForum" src="img/paysbasque.jpg" alt="Aperçu Forum">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>

        <!-------------------------------------------------------------------FOOTER------------------------------------------------------------------------------->
        <footer>
            <?php include_once 'footer.php'; ?>
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
        <script 
            type="text/javascript" 
            src="script.js">
        </script>
    </body>
</html>