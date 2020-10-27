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

        <div class="principale">
            <!-- Image de la France -->
            <div id="les4img" class="col-12 ">
                <center>
                    <div class="img-fluid col-6 row "><img src="img/carteO.png" class="img-fluid col-6 p-0"><img src="img/carteE.png"class="img-fluid col-6 p-0"></div>
                    <div class="img-fluid col-6 row"><img src="img/carteSO.png" class="img-fluid col-6 p-0"><img src="img/carteSE.png" class="img-fluid col-6 p-0"></div>
                </center>
            </div>        

            <!-- OUEST -->
            <div id="ouest" class="align-items-center m-5 ">
                <!-- Bretagne -->
                <div class="ouest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4 mb-2"><img src="img/bretagne.jpg" class="img-fluid w-100" alt="La Bretagne"></div>
                            <div class="col-sm-12 col-xs-12 col-md-12 align-item-rigth text-justify">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.</p>
                                <p id="fermeture">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.
                                <a href="#">Fermer</a>
                                </p>
                            </div>
                        </div>
                        <div class="plus text-right">
                            <a href="#fermeture">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton tect-center col-2"> 
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                <!-- Nantes -->
                <div class="ouest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-4 mb-2"><img src="img/Nantes.jpg" class="img-fluid w-100" alt="la ville de Nantes"></div>
                            <div class="col-sm-12 col-xs-12 col-md-12 col-7 align-item-rigth text-justify">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.
                                </p>
                                <p id="fermeture2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed pharetra arcu. Proin vitae gravida erat. Aliquam sit amet odio imperdiet augue feugiat fermentum. Nullam ultricies nibh sagittis efficitur pretium. Phasellus venenatis tellus nisi, ut ultricies erat aliquam vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut et enim aliquet, malesuada nunc vel, lacinia nisl. Cras pretium accumsan sem, ut cursus massa ultricies quis. Nullam eget fringilla magna. Pellentesque sed maximus nisl, vel tincidunt felis. Sed blandit aliquam eros in molestie.
                                In aliquet condimentum congue. Praesent ut nibh lectus. Vestibulum vestibulum imperdiet vehicula. Pellentesque et aliquam augue. Proin quis enim eros. Donec interdum tortor dictum, viverra diam ac, euismod leo. Donec suscipit neque non velit blandit, ac ultricies massa convallis. Morbi id sem vitae justo feugiat facilisis. Morbi finibus tempus sapien nec consequat. Nam posuere nulla sed purus fringilla eleifend. Quisque porta libero at ipsum ultricies imperdiet. Fusce eget mauris volutpat, fermentum orci ut, rhoncus magna. Aliquam elit elit, finibus sit amet vulputate in, porta nec orci. Aliquam semper orci id sem mattis, ac ornare nibh euismod. Ut lacinia vestibulum metus, vitae efficitur purus mollis ac.
                                <a href="#2">Fermer</a>
                                </p>
                            </div>
                        </div>
                        <div class="plus text-right">
                            <a href="#fermeture2">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton tect-center col-2"> 
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- Mont Saint Michel -->
                <div class="ouest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-4 mb-2"><img src="img/Mtstmich.jpg" class="img-fluid w-100" alt="la ville de Nantes"></div>
                            <div class="col-sm-12 col-xs-12 col-md-12 align-item-rigth text-justify">
                                <p style="text-indent: 30px">La ou plutot les Normandies présentent une très large gamme de paysages; des côtes aux terres vallonnées, mais MobiliT a fait le choix de mettre en avant l'un de ses joyeux historiques et architecturaux : le Mont Saint Michel.
                                Vieux de plus de dix siècles, l'édifice accueille chaque année des millions de visiteurs et est depuis maintenant une dizaine d'années accessible à tous !</p>
                                </br> <p style="text-indent: 30px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                </br><p id="fermeture3" style="text-indent: 15px">L'abbaye du Mont Saint Michel ainsi que la baie qui entoure le village sont tous deux classés au patrimoine monidaux de l'UNESCO. La baie est réputée pour ses marées exceptionnelles (les plus grandes d'Europe), qui remontent selon la légende, a la vitesse d'un cheval au galop.
                                </p><p style="text-indent: 30px">Le village est depuis des siècles le théâtres de pélerinages et donc de venue massive de gens. On y retrouve donc de nombreuses auberges, attestant de l'attractivité de l'abbaye ainsi que de nombreuses ruelles moyennageuses, transformant le rocher en labyrinthe pour des touristes non avertis.
                                </p><p style="text-indent: 30px">La visite du Mont est aussi l'occasion unique de revenir sur le travail des très nombreux artistes venus affronter l'exercice des couleurs, lors des somptueux levers ou couchers de soleil.
                                <a href="##">Fermer</a>
                                </p>
                            </div>
                        </div>
                        <div class="plus text-right">
                            <a href="##fermeture3">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton tect-center col-2"> 
                            <a href ="https://www.ot-montsaintmichel.com/pratique/tourisme-pour-tous/"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
