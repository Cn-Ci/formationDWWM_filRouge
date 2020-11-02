<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - destinations</title>
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
            <div id="ouest" class="align-items-center m-3 ">
                <!-- Bretagne -->
                <div class="ouest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/Bretagne.jpg" class="img-fluid w-100" alt="la ville de Nantes">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LA BRETAGNE</h4>
                                <p style="text-indent: 20px">S'il est une région de France fière de son identité c'est bien elle : la Bretagne ! Bras de France cerné par les mers, la Bretagne est une région aussi accueillante que belle. La Bretagne est souvent assimilée à la mer, de par ces centaines d'îles et ses côtes, mais c'est aussi un territoire riche, bercé de légendes et coutumes celtiques.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Si la région est réputée pour le caractère de ses mers et ses paysages parfois escarpés, c'est aussi une terre et une culture d'accueil. Nombreux sentiers sont aujourd'hui accessibles à tous, zoos, chateaux  et de nombreux hébergements labélisés vous ouvrent leur porte . En Bretagne en 2018, c'était plus de 200 professionnels du tourisme reconnu par l'Etat via le label Tourisme & Handicap</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture1">
                                    <div>

                                        <p id="fermeture1" style="text-indent: 20px">Le climat breton peut, comme dit le dicton, varier d'une heure à l'autre et offre ainsi de nombreuses occasions de goûter à la richesse de la gastronomie locale. Amateurs et amatrices de produits de la mer, tenez-vous bien ! Une cuisine qui puise ses racines dans l'agriculture locale, faite de produits simples et sains. </p>
                                        <p id="fermeture1" style="text-indent: 20px"> La Bretagne est souvent valorisée par ses côtes et sa nature, cependant certaines villes méritent le détour ! A l'instar de Rennes, capitale régionale, ville verte et dynamique qui a su se rendre accessible au plus grand nombre. Sans quitter l'agglomération, vous pourrez retourner sur les traces d'Arthur et Merlin en découvrant les jardins de Brocéliande.</p>
                                        <p id="fermeture1" style="text-indent: 20px">La Bretagne, c'est aussi une culture de la fête, d'inombrable fanfares et Fes-tnoz animent chaque weekend les villages, places et marchés de la région.  </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.tourismebretagne.com/handi-tourisme-en-bretagne/"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                <!-- Nantes -->
                <div class="ouest2 row d-flex justify-content-center m-2 mb-5">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/Nantes.jpg" class="img-fluid w-100" alt="la ville de Nantes">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">NANTES</h4>
                                <p style="text-indent: 20px">Capitale des Loires et frontalière de la Bretagne, Nantes est une ville bercée par l'histoire et l'eau. Forte de cette ressource naturelle, la ville a su redorer son blason en aménageant la Loire et en amenant de la verdure dans la cité, élue capitale verte en 2013. Consciente de son attractivité, la ville propose tout au long de l'année une large gamme d'activités gratuites.   </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Cette ville moderne est bien en avance sur l'amènagement du territoire pour toutes les mobilités et vous permettra, quelque soit votre handicap, de la découvrir facilement.  </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture2">
                                    <div>

                                        <p id="fermeture2" style="text-indent: 20px">La ville accueille chaque année les déambulations des Géants de la compagnie Royal de Luxe, qui émerveillent autant enfants que parents. C'est aussi le départ de courses nautiques et une ville réputée pour la chaleur de ses nuits (concerts, spectacles, bars, restaurants...)</p>
                                        <p id="fermeture2" style="text-indent: 20px">Si vous recherchez d'avantage de calme que de bouillonnement, Nantes c'est aussi une centaine d'espace verts ou se promener en toute tranquilité. Elle abrite notamment le seul parc Natura2000 en zone urbaine, de France qu'il vous sera possible de visiter sur réservation.</p>
                                        <p id="fermeture2" style="text-indent: 20px">Côté Histoire, son passé est aussi chargé que sulfureux. Du Moyen-âge au commerce triangulaire, nombreuses sont les traces de son histoire. Offrez-vous, le temps d'un weekend une escapade temporelle.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.nantes-tourisme.com/fr/pratique/accessibilite-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- Mont Saint Michel -->
                <div class="ouest3 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/Mtstmich.jpg" class="img-fluid w-100" alt="le Mont Saint Michel">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LE MONT SAINT MICHEL</h4>
                                <p style="text-indent: 20px">La ou plutot les Normandies présentent une très large gamme de paysages; des côtes aux terres vallonnées, mais MobiliT a fait le choix de mettre en avant l'un de ses joyeux historiques et architecturaux : le Mont Saint Michel.
                                Vieux de plus de dix siècles, l'édifice accueille chaque année des millions de visiteurs et est depuis maintenant une dizaine d'années accessible à tous !</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture3">
                                    <div>

                                        <p id="fermeture3" style="text-indent: 20px">L'abbaye du Mont Saint Michel ainsi que la baie qui entoure le village sont tous deux classés au patrimoine monidaux de l'UNESCO. La baie est réputée pour ses marées exceptionnelles (les plus grandes d'Europe), qui remontent selon la légende, a la vitesse d'un cheval au galop.</p>
                                        <p id="fermeture3" style="text-indent: 20px">Le village est depuis des siècles le théâtres de pélerinages et donc de venue massive de gens. On y retrouve donc de nombreuses auberges, attestant de l'attractivité de l'abbaye ainsi que de nombreuses ruelles moyennageuses, transformant le rocher en labyrinthe pour des touristes non avertis.</p>
                                        <p id="fermeture3" style="text-indent: 20px">La visite du Mont est aussi l'occasion unique de revenir sur le travail des très nombreux artistes venus affronter l'exercice des couleurs, lors des somptueux levers ou couchers de soleil.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div> -->
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.ot-montsaintmichel.com/pratique/tourisme-pour-tous/" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                
    
            </div>


            <!-- EST -->
            <div id="est" class="align-items-center m-3 ">
                <!-- LES VIGNOBLES -->
                <div class="est1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/vignoble.jpg" class="img-fluid w-100" alt="les vignobles">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LES VIGNOBLES</h4>
                                <p style="text-indent: 20px">Si la France est aujourd'hui un pays modere, c'est aussi un territoire riche de sa culture, son histoire et son terroir. Ainsi rare sont les régions de France où le vin ne fait pas religion. Nous vous proposons là de faire un zoom sur les vins de l'Alsace au sud de la Bourgogne.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Il existe aujourd'hui de nombreux biais de visite des vignobles : en voiture, en vélo, à pied, seul ou groupe ... De nombreux départements et établissements se sont modernisés et proposent maintenant des découvertes pour tous des domaines. la côte chalonnaise par exemple compte aujourd'hui plus de 10 établissements labellisés handi-tourisme, vous permettant de déguster et découvrir leur production.</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture4">
                                    <div>

                                        <p id="fermeture4" style="text-indent: 20px">Découvrir les vignobles de France et notamment les vignobles de l'Est c'est aussi parcourir l'histoire de la France, ses paysages et ses villes. En effet, l'économie du vin est depuis longtemps lucrative et l'on peut admirer aujourd'hui les manoirs et chateaux  des domaines viticoles.</p>
                                        <p id="fermeture4" style="text-indent: 20px">L'oenologie rime avec beaucoup de mots, mais le premier d'entre eux est sans aucun doute GASTRONOMIE ! Des vacances sur la thématique des vins, ne peuvent se faire sans découverte culinaire. Des spécialités de l'Alsacienne à la cité de la Gatsronomie de Dijon, des dizaines de plats viendront accompagner votre voyage et vos vins.</p>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="http://tourisme-sud-cote-chalonnaise.com/caves-et-domaines-accessibles-aux-personnes-en-situation-de-handicap/"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                <!-- DIJON -->
                <div class="est2 row d-flex justify-content-center m-2 mb-5">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/dijon.jpg" class="img-fluid w-100" alt="la ville de Dijon">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">DIJON & SES ALENTOURS</h4>
                                <p style="text-indent: 20px">Capitale des Loires et frontalière de la Bretagne, Nantes est une ville bercée par l'histoire et l'eau. Forte de cette ressource naturelle, la ville a su redorer son blason en aménageant la Loire et en amenant de la verdure dans la cité, élue capitale verte en 2013. Consciente de son attractivité, la ville propose tout au long de l'année une large gamme d'activités gratuites.   </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Cette ville moderne est bien en avance sur l'amènagement du territoire pour toutes les mobilités et vous permettra, quelque soit votre handicap, de la découvrir facilement.  </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture5">
                                    <div>

                                        <p id="fermeture5" style="text-indent: 20px">La ville accueille chaque année les déambulations des Géants de la compagnie Royal de Luxe, qui émerveillent autant enfants que parents. C'est aussi le départ de courses nautiques et une ville réputée pour la chaleur de ses nuits (concerts, spectacles, bars, restaurants...)</p>
                                        <p id="fermeture5" style="text-indent: 20px">Si vous recherchez d'avantage de calme que de bouillonnement, Nantes c'est aussi une centaine d'espace verts ou se promener en toute tranquilité. Elle abrite notamment le seul parc Natura2000 en zone urbaine, de France qu'il vous sera possible de visiter sur réservation.</p>
                                        <p id="fermeture5" style="text-indent: 20px">Côté Histoire, son passé est aussi chargé que sulfureux. Du Moyen-âge au commerce triangulaire, nombreuses sont les traces de son histoire. Offrez-vous, le temps d'un weekend une escapade temporelle.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture5" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.nantes-tourisme.com/fr/pratique/accessibilite-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- LA REGION NORD -->
                <div class="est3 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/nord.jpg" class="img-fluid w-100" alt="la région Nord">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LA REGION NORD</h4>
                                <p style="text-indent: 20px">La ou plutot les Normandies présentent une très large gamme de paysages; des côtes aux terres vallonnées, mais MobiliT a fait le choix de mettre en avant l'un de ses joyeux historiques et architecturaux : le Mont Saint Michel.
                                Vieux de plus de dix siècles, l'édifice accueille chaque année des millions de visiteurs et est depuis maintenant une dizaine d'années accessible à tous !</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture6">
                                    <div>

                                        <p id="fermeture6" style="text-indent: 20px">L'abbaye du Mont Saint Michel ainsi que la baie qui entoure le village sont tous deux classés au patrimoine monidaux de l'UNESCO. La baie est réputée pour ses marées exceptionnelles (les plus grandes d'Europe), qui remontent selon la légende, a la vitesse d'un cheval au galop.</p>
                                        <p id="fermeture6" style="text-indent: 20px">Le village est depuis des siècles le théâtres de pélerinages et donc de venue massive de gens. On y retrouve donc de nombreuses auberges, attestant de l'attractivité de l'abbaye ainsi que de nombreuses ruelles moyennageuses, transformant le rocher en labyrinthe pour des touristes non avertis.</p>
                                        <p id="fermeture6" style="text-indent: 20px">La visite du Mont est aussi l'occasion unique de revenir sur le travail des très nombreux artistes venus affronter l'exercice des couleurs, lors des somptueux levers ou couchers de soleil.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture6" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.ot-montsaintmichel.com/pratique/tourisme-pour-tous/" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                
    
            </div>


            <!-- SUD-OUEST -->
            <div id="sudouest" class="align-items-center m-3 ">
                <!-- TOULOUSE -->
                <div class="sudouest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/toulouse.jpg" class="img-fluid w-100" alt="Toulouse">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                            <h4 class="mb-3">TOULOUSE</h4>
                                <p style="text-indent: 20px">S'il est une région de France fière de son identité c'est bien elle : la Bretagne ! Bras de France cerné par les mers, la Bretagne est une région aussi accueillante que belle. La Bretagne est souvent assimilée à la mer, de par ces centaines d'îles et ses côtes, mais c'est aussi un territoire riche, bercé de légendes et coutumes celtiques.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Si la région est réputée pour le caractère de ses mers et ses paysages parfois escarpés, c'est aussi une terre et une culture d'accueil. Nombreux sentiers sont aujourd'hui accessibles à tous, zoos, chateaux  et de nombreux hébergements labélisés vous ouvrent leur porte . En Bretagne en 2018, c'était plus de 200 professionnels du tourisme reconnu par l'Etat via le label Tourisme & Handicap</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture7">
                                    <div>

                                        <p id="fermeture7" style="text-indent: 20px">Le climat breton peut, comme dit le dicton, varier d'une heure à l'autre et offre ainsi de nombreuses occasions de goûter à la richesse de la gastronomie locale. Amateurs et amatrices de produits de la mer, tenez-vous bien ! Une cuisine qui puise ses racines dans l'agriculture locale, faite de produits simples et sains. </p>
                                        <p id="fermeture7" style="text-indent: 20px"> La Bretagne est souvent valorisée par ses côtes et sa nature, cependant certaines villes méritent le détour ! A l'instar de Rennes, capitale régionale, ville verte et dynamique qui a su se rendre accessible au plus grand nombre. Sans quitter l'agglomération, vous pourrez retourner sur les traces d'Arthur et Merlin en découvrant les jardins de Brocéliande.</p>
                                        <p id="fermeture7" style="text-indent: 20px">La Bretagne, c'est aussi une culture de la fête, d'inombrable fanfares et Fes-tnoz animent chaque weekend les villages, places et marchés de la région.  </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture7" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.tourismebretagne.com/handi-tourisme-en-bretagne/"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                <!-- PAYS BASQUE  -->
                <div class="sudouest2 row d-flex justify-content-center m-2 mb-5">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/paysbasque.jpg" class="img-fluid w-100" alt="les côtes du Pays Basque">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LE PAYS BASQUE</h4>
                                <p style="text-indent: 20px">Capitale des Loires et frontalière de la Bretagne, Nantes est une ville bercée par l'histoire et l'eau. Forte de cette ressource naturelle, la ville a su redorer son blason en aménageant la Loire et en amenant de la verdure dans la cité, élue capitale verte en 2013. Consciente de son attractivité, la ville propose tout au long de l'année une large gamme d'activités gratuites.   </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Cette ville moderne est bien en avance sur l'amènagement du territoire pour toutes les mobilités et vous permettra, quelque soit votre handicap, de la découvrir facilement.  </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture8">
                                    <div>

                                        <p id="fermeture8" style="text-indent: 20px">La ville accueille chaque année les déambulations des Géants de la compagnie Royal de Luxe, qui émerveillent autant enfants que parents. C'est aussi le départ de courses nautiques et une ville réputée pour la chaleur de ses nuits (concerts, spectacles, bars, restaurants...)</p>
                                        <p id="fermeture8" style="text-indent: 20px">Si vous recherchez d'avantage de calme que de bouillonnement, Nantes c'est aussi une centaine d'espace verts ou se promener en toute tranquilité. Elle abrite notamment le seul parc Natura2000 en zone urbaine, de France qu'il vous sera possible de visiter sur réservation.</p>
                                        <p id="fermeture8" style="text-indent: 20px">Côté Histoire, son passé est aussi chargé que sulfureux. Du Moyen-âge au commerce triangulaire, nombreuses sont les traces de son histoire. Offrez-vous, le temps d'un weekend une escapade temporelle.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture8" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.nantes-tourisme.com/fr/pratique/accessibilite-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- LA DUNE DU PILAT -->
                <div class="sudouest3 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/dune.jpg" class="img-fluid w-100" alt="la Dune du Pilat">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">DLA DUNE DU PILAT</h4>
                                <p style="text-indent: 20px">La ou plutot les Normandies présentent une très large gamme de paysages; des côtes aux terres vallonnées, mais MobiliT a fait le choix de mettre en avant l'un de ses joyeux historiques et architecturaux : le Mont Saint Michel.
                                Vieux de plus de dix siècles, l'édifice accueille chaque année des millions de visiteurs et est depuis maintenant une dizaine d'années accessible à tous !</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture9">
                                    <div>

                                        <p id="fermeture9" style="text-indent: 20px">L'abbaye du Mont Saint Michel ainsi que la baie qui entoure le village sont tous deux classés au patrimoine monidaux de l'UNESCO. La baie est réputée pour ses marées exceptionnelles (les plus grandes d'Europe), qui remontent selon la légende, a la vitesse d'un cheval au galop.</p>
                                        <p id="fermeture9" style="text-indent: 20px">Le village est depuis des siècles le théâtres de pélerinages et donc de venue massive de gens. On y retrouve donc de nombreuses auberges, attestant de l'attractivité de l'abbaye ainsi que de nombreuses ruelles moyennageuses, transformant le rocher en labyrinthe pour des touristes non avertis.</p>
                                        <p id="fermeture9" style="text-indent: 20px">La visite du Mont est aussi l'occasion unique de revenir sur le travail des très nombreux artistes venus affronter l'exercice des couleurs, lors des somptueux levers ou couchers de soleil.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture9" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.ot-montsaintmichel.com/pratique/tourisme-pour-tous/" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                
    
            </div>

            <!-- SUD-EST -->
            <div id="sudest" class="align-items-center m-3 ">
                <!-- MONT BLANC -->
                <div class="sudest1 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/montblanc.jpg" class="img-fluid w-100" alt="le massif du Mont-Blanc">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LES ALPES & LE MASSIF DU MONT BLANC</h4>
                                <p style="text-indent: 20px">S'il est une région de France fière de son identité c'est bien elle : la Bretagne ! Bras de France cerné par les mers, la Bretagne est une région aussi accueillante que belle. La Bretagne est souvent assimilée à la mer, de par ces centaines d'îles et ses côtes, mais c'est aussi un territoire riche, bercé de légendes et coutumes celtiques.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Si la région est réputée pour le caractère de ses mers et ses paysages parfois escarpés, c'est aussi une terre et une culture d'accueil. Nombreux sentiers sont aujourd'hui accessibles à tous, zoos, chateaux  et de nombreux hébergements labélisés vous ouvrent leur porte . En Bretagne en 2018, c'était plus de 200 professionnels du tourisme reconnu par l'Etat via le label Tourisme & Handicap</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture10">
                                    <div>

                                        <p id="fermeture10" style="text-indent: 20px">Le climat breton peut, comme dit le dicton, varier d'une heure à l'autre et offre ainsi de nombreuses occasions de goûter à la richesse de la gastronomie locale. Amateurs et amatrices de produits de la mer, tenez-vous bien ! Une cuisine qui puise ses racines dans l'agriculture locale, faite de produits simples et sains. </p>
                                        <p id="fermeture10" style="text-indent: 20px"> La Bretagne est souvent valorisée par ses côtes et sa nature, cependant certaines villes méritent le détour ! A l'instar de Rennes, capitale régionale, ville verte et dynamique qui a su se rendre accessible au plus grand nombre. Sans quitter l'agglomération, vous pourrez retourner sur les traces d'Arthur et Merlin en découvrant les jardins de Brocéliande.</p>
                                        <p id="fermeture10" style="text-indent: 20px">La Bretagne, c'est aussi une culture de la fête, d'inombrable fanfares et Fes-tnoz animent chaque weekend les villages, places et marchés de la région.  </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture10" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.savoie-mont-blanc.com/Preparer-son-sejour/Handitourisme"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                <!-- La vallée du Rhone -->
                <div class="sudest2 row d-flex justify-content-center m-2 mb-5">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/vallee.jpg" class="img-fluid w-100" alt="la vallée du Rhone">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LA VALLÉE DU RHÔNE</h4>
                                <p style="text-indent: 20px">Capitale des Loires et frontalière de la Bretagne, Nantes est une ville bercée par l'histoire et l'eau. Forte de cette ressource naturelle, la ville a su redorer son blason en aménageant la Loire et en amenant de la verdure dans la cité, élue capitale verte en 2013. Consciente de son attractivité, la ville propose tout au long de l'année une large gamme d'activités gratuites.   </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Cette ville moderne est bien en avance sur l'amènagement du territoire pour toutes les mobilités et vous permettra, quelque soit votre handicap, de la découvrir facilement.  </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture11">
                                    <div>

                                        <p id="fermeture11" style="text-indent: 20px">La ville accueille chaque année les déambulations des Géants de la compagnie Royal de Luxe, qui émerveillent autant enfants que parents. C'est aussi le départ de courses nautiques et une ville réputée pour la chaleur de ses nuits (concerts, spectacles, bars, restaurants...)</p>
                                        <p id="fermeture11" style="text-indent: 20px">Si vous recherchez d'avantage de calme que de bouillonnement, Nantes c'est aussi une centaine d'espace verts ou se promener en toute tranquilité. Elle abrite notamment le seul parc Natura2000 en zone urbaine, de France qu'il vous sera possible de visiter sur réservation.</p>
                                        <p id="fermeture11" style="text-indent: 20px">Côté Histoire, son passé est aussi chargé que sulfureux. Du Moyen-âge au commerce triangulaire, nombreuses sont les traces de son histoire. Offrez-vous, le temps d'un weekend une escapade temporelle.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture11" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.nantes-tourisme.com/fr/pratique/accessibilite-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- MARSEILLE -->
                <div class="sudest3 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/marseille.jpg" class="img-fluid w-100" alt="le ville de Marseille">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">MARSEILLE</h4>
                                <p style="text-indent: 20px">La ou plutot les Normandies présentent une très large gamme de paysages; des côtes aux terres vallonnées, mais MobiliT a fait le choix de mettre en avant l'un de ses joyeux historiques et architecturaux : le Mont Saint Michel.
                                Vieux de plus de dix siècles, l'édifice accueille chaque année des millions de visiteurs et est depuis maintenant une dizaine d'années accessible à tous !</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture12">
                                    <div>

                                        <p id="fermeture12" style="text-indent: 20px">L'abbaye du Mont Saint Michel ainsi que la baie qui entoure le village sont tous deux classés au patrimoine monidaux de l'UNESCO. La baie est réputée pour ses marées exceptionnelles (les plus grandes d'Europe), qui remontent selon la légende, a la vitesse d'un cheval au galop.</p>
                                        <p id="fermeture12" style="text-indent: 20px">Le village est depuis des siècles le théâtres de pélerinages et donc de venue massive de gens. On y retrouve donc de nombreuses auberges, attestant de l'attractivité de l'abbaye ainsi que de nombreuses ruelles moyennageuses, transformant le rocher en labyrinthe pour des touristes non avertis.</p>
                                        <p id="fermeture12" style="text-indent: 20px">La visite du Mont est aussi l'occasion unique de revenir sur le travail des très nombreux artistes venus affronter l'exercice des couleurs, lors des somptueux levers ou couchers de soleil.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plus text-right col-10 offset-1 mb-2">
                            <a  class="text-success" data-toggle="collapse" href="#fermeture12" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">En lire plus</a>
                        </div>
                    </div>

                    <!-- lien forum + lien exploration -->
                    <div class="forumLien row col-12">
                        <div class="forum text-center col-10">
                            <a href ="#"><button type="button" class="btn btn-outline-success color-228B22">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton text-center col-2"> 
                            <a href ="https://www.ot-montsaintmichel.com/pratique/tourisme-pour-tous/" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>
                
    
            </div>
        
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
