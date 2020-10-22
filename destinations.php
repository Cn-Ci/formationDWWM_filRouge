<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - Organisation</title>
        <meta charset="utf-8">
        <!-- BOOTSTRAP -->
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
            crossorigin="anonymous" />
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
            href="destinations.css">
        <!-- TYPO -->
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
        <!-- Navbar -->
        <div class="container-fluid">
            <?php include 'navbar.php';?>
        </div>

        <div class="principale mt-20">
            <!-- Image de la France -->
            <div id="les4images" class="image text-center row col-10 offset-1">
                <div class=" ">
                    <div class="col-8 offset-2 row "><img src="img/carteO.png" class="img-fluid col-6  "><img src="img/carteE.png"class="img-fluid col-6 "></div>
                    <div class="col-8 offset-2 row"><img src="img/carteSO.png" class="img-fluid col-6"><img src="img/carteSE.png" class="img-fluid col-6"></div>
                        
                </div>
            </div>        

            <!-- OUEST -->
            <div id="ouest" class="align-items-center m-5 d-flex justify-content-center">
                <div class="ouest1 row d-flex justify-content-center">
                    <!-- image et texte -->
                    <div class="">
                        <div class="d-flex justify-content-center">
                            <div class="col-s-6 col-4"><img src="img/bretagne.jpg" class="img-fluid w-100" alt="La Bretagne"></div>
                            <div class="col-s-xs-12 col-8 text-justify">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.</p>
                                <p id="fermeture">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.
                                <a href="#">Fermer</a>
                                </p>
                            </div>
                        </div>
                        <a href="#fermeture">En lire plus</a>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row align-items-center ">
                        <div class="forum col-9">
                        
                        </div>
                        <div class="bouton d-flex justify-content-center col-3"> 
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>

                <div>
    
            </div>
            <!-- EST -->
            <!-- SUD-OUEST -->
            <!-- SUD-EST -->
        
        </div> 

 



        <!-- Footer -->
        <footer>
            <!-- ligne de séparation -->
            <hr class="hrsep">
            
            <div class="container-fluid">
                <?php include 'footer.php';?>
            </div>
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
