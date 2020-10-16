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
        <!-- TYPO -->
        <link 
            href="//db.onlinewebfonts.com/c/7a8bc7c29b5bcadb9510cca51210ac46?family=Sitka+Banner" 
            rel="stylesheet"
            type="text/css"/>
    </head>

    <body>
        <div id="page1" class="container-fluid">
            <?php include 'navbar.php';?>
            <div class="row">
                <div class="col-sm-1"></div>
                <div id="blocLogo" class="col-sm-12 col-md-6 col-lg-4">
                    <div>
                        <p class="whiteColor" id="mdSlogan">MOBILI'T</p>
                    </div>
                    <div>
                        <p class="whiteColor" id="sousSlogan">Idées voyage adapté à <br>votre handicap</p>
                    </div>
                    <a href="#">
                        <div id="showDBlock">
                            <p class="whiteColor" id="showDestination">Voir les Destinations</p>
                        </div>
                    </a>
                </div>
            </div>

            <a id="bottom" href="#" onclick="goToPage2()">
                <div id="blocOverlay" class="row">
                    <div id="test" class="col-sm-12 footer whiteColor"><p id="discoverSite">DÉCOUVRIR NOTRE SITE</p><div id="triangle"><div></div>
                </div>
            </a>
        </div>
        
        <div id="page2" class="container-fluid" >
            <div class="row" id="EntetePresentation">
                <div class="col-sm-2"></div>
                <div class="col-8">
                    <h1>MOBILI'T QU'EST-CE-QUE C'EST ?</h1>
                    <h3>Idées & Conseils voyage pour personnes en situation de handicap</h3>
                </div>
                <div class="col-sm-2"></div>
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