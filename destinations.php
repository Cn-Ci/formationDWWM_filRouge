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
                                <img src="img/bretagne.jpg" class="img-fluid w-100" alt="les côtes roses de la région bretonne">
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
                            <a href ="#"><button type="button" class="btn btn-large btn-outline-success color-228B22" style="font-size:smaller">Accéder au Forum</button> </a>
                        </div>
                        <div class="bouton col-2"> 
                            <a href ="https://www.nantes-tourisme.com/fr/pratique/accessibilite-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22 ">M'y rendre</button> </a>
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
                                <p style="text-indent: 20px">Capitale des des Ducs de Bourgogne, Dijon est aujourd'hui plus réputée pour sa moutarde que son histoire, c'est pourtant une place forte de l'Histoire de France, comme en témoigne son architecture. Très épargnée par les guerres, la ville recèle encore de trésors historiques (notamment un castrum du XIeme siècle) et de nombreux batiments du duchet de Bourgogne. </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Dijon est une ville qu'il n'a pas été facile de moderniser, néanmoins ces dernières années, la ville s'est consacrée au développement de son tourisme et de son accessibilité. Avec un centre ville entièrement piéton, il est très facile aujourd'hui de se ballader de monuments en musées et restaurants, ainsi que de partir à la découverte de la fameuse Côte d'Or.  </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture5">
                                    <div>

                                        <p id="fermeture5" style="text-indent: 20px">Pour les amateurs de verdure urbaine, la ville propose actuellement des visites de ses principaux parcs (Colombière et Darcy) ainsi que du Lac Kir labellisées handi-tourisme .</p>
                                        <p id="fermeture5" style="text-indent: 20px">A l'occasion de sa rénovation en 2018, le Musée de Beaux Arts de Dijon, réputé pour son stock impressionnant d'oeuvres, s'est modernisé et adapté à un plus large public. Les espaces étant accessible à tous et les visites adaptées aux différents publics.</p>
                                        <p id="fermeture5" style="text-indent: 20px">Enfin pour les plus gourmands et gourmandes, en attendant l'ouverture de la toute nouvelle Cité  Nationale de la Gastronomie, vous saurez vous ravir les papilles avec un très large choix de restaurants, labellisés handi-tourisme eux aussi.</p>
                                        
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
                            <a href ="https://www.bourgogne-tourisme.com/profils/tourisme-et-handicap" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
                        </div>

                    </div>

                </div>


                <!-- LA REGION HAUTS DE FRANCE -->
                <div class="est3 row d-flex justify-content-center m-2 mb-4">
                    <!-- image et texte -->
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-lg-4 mb-2">
                                <img src="img/nord.jpg" class="img-fluid w-100" alt="les côtes blanches de calcaire du Nord">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LA REGION HAUTS DE FRANCE</h4>
                                <p style="text-indent: 20px">La région des Hauts de France, est une des régions les plus clivantes en France. Partagée entre différentes cultures (flammande, chti, picarde), entre un passé rutilant et une désindustrialisation catastrophique, entre des paysages agricoles et des côtes sauvages.
                                Il aura fallu des années et de l'acharnement pour redorer le blason de ses villes, mais grâce à la culture notamment, les villes de la métropole de Lille, Arras, les villes côtières et bien d'autres ont su se renouveller et attirer de nouveaux publics. </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Malgré les nombreux pavés qui caractérisent les Hauts de France, la région a su s'adapter et développer des transports permettant à tous d'en découvrir chaque recoin. De plus la proximité avec la Belgique (très en avance sur l'accessibilité pour tous) a d'heureuses conséquences.</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture6">
                                    <div>

                                        <p id="fermeture6" style="text-indent: 20px">Forte sa côte sauvage, la région a su mettre en place des activités comme le vélopousse/tiralo à Gravelines-Petit, des croisières dans les marais ou encore la visite de réserve naturelle autour de Saint Ladre.</p>
                                        <p id="fermeture6" style="text-indent: 20px">Nombreux sont également les musées de Lille à Tourcoing mais aussi en Picardie à vulgariser leur contenu en proposant des visites en en language des signes ou des fascicules en braille.</p>
                                        
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
                            <a href ="http://www.maintienadomicile-conseils.com/tourisme-handicap-dans-le-nord-de-la-france" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
                                <p style="text-indent: 20px">Ville à l'architecture caractéristique des cités du Midi de la France, la « ville rose » (dûe à la couleur du matériau de construction traditionnel local, la brique de terre cuite), chantée par Nougaro est aujourd'hui un pôle du Sud Puest très attractif, tant pour la qualité de la vie que pour le plaisir du tourisme. </p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Pionnière en matière de prise en charge, la ville de Toulouse propose une initative unique en France d'aide et d'accompagnement au voyage pour les personnes en situation de handicap.</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture7">
                                    <div>

                                        <p id="fermeture7" style="text-indent: 20px">Libre à vous d'errer dans les ruelles étroites (typiques du sud), de la ville rose et de vous imprégner des différentes architectures. Laissez vous également aller aux promenades le long de la Garonne ou dans un des nombreux parcs de la ville. Le tout avec les guides fournis par la ville de Toulouse en braille ou en audiodesription.  </p>
                                        <p id="fermeture7" style="text-indent: 20px">Comme de nombreuses villes du sud, Toulouse se couche tard. Nombreuses sont les occasions de voire un spectacle, d'entendre un concert ou tout simplement de profiter d'un repas nocturne dans l'un de 70 établissements labellisés Handi Tourisme que compte la métropole occitane.</p>
                                        
                                        
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
                            <a href ="https://www.toulouse-tourisme.com/handi-tour-guide/toulouse/pcumid031v50ccnv"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
                                <p style="text-indent: 20px">A cheval entre la France et l'Espagne, cerné par l'océan et les montagnes, el Pays-basque est un territoire de culture ! Nous pourrions même dire de cultureS, en effet, l'influence celte est non négligeable, ainsi que les influences espagnole et française . Ce tourbillon de racines, fait aujourd'hui du Pays Basque un joyau européen.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Cette région du sud, pourtant bien tempérée grâce à son environnement est proche de la nature mais aussi de ses habitants. Ainsi les infrastructures ne sont elles pas pensées pour le tourisme mais bien pour le quotidien et vous garantissent un accès complet aux villes ainsi qu'aux belles campagnes.</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture8">
                                    <div>

                                        <p id="fermeture8" style="text-indent: 20px">Les fêtes endémiques sont légions au Pays Basque : Ferria, Pelote, parades... Les étés sont rythmés par les rassemblements en l'honneur de la culture locale. Ces rassemblements sont tous prévus avec des espaces prioritaires pour les personnes en situation de handicap.</p>
                                        <p id="fermeture8" style="text-indent: 20px">Découvrir le Pays Basque, c'est aussi découvrir ses montagnes qui le façonnent. Des escursions pour tous sont organisées du mardi au samedi avec des guides diplomés . Tous les renseignements sont disponible à l'office du tourisme du Pays Basque, et les inscriptions gratuites. Vous permettant de découvrir sans contrainte la beauté des Pyrénées Atlantiques.</p>
                                        <p id="fermeture8" style="text-indent: 20px">Le site de l'office du tourisme du Pays Basque, vous propose des itinéraire complet pour parcourir les villes d'Hendaye, Bayonne et Biarritz, sur une journée chacune, en totale autonomie. Des transports, au lieu de visite, en passant par des lieux de restaurations adaptés et délicieux !</p>
                                        
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
                            <a href ="https://www.hendaye-tourisme.fr/images/pages/document/document-30_1489654687-83689150.pdf" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
                                <h4 class="mb-3">ARCACHON & LA DUNE DU PILAT</h4>
                                <p style="text-indent: 20px">La Dune du Pilat est un des rares monuments classés en mouvement. En effet cette étendue de sable de 3km et plus de 100m de haut, si elle est la plus grande d'Europe, c'est aussi un immense ban de sable en mouvement perpétuel.
                                Ce édifice naturel attire donc plus de 2 millions de visiteurs par an.</p>
                                <p style="text-indent: 20px" class="m-0 p-0">Quant au bassin d'Arcachon, communauté urbaine la plus proche de la Grande Dune, il prospère dans un environnement unique, une enclave maritime qui le protège de la rudesse de l'océan atlantique, tout en offrant tous les bienfaits de l'air marin.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Du parking à la nef de son abbaye, en passant par sa baie, le village a développé des parcours "pour tous" aussi bien handicap moteur que visuel ou auditif. Vous ne manquerez plus rien de la visite. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture9">
                                    <div>
                                        <p id="fermeture9" style="text-indent: 20px">La région d'Arcachon c'est avant tout une relation très étroite à l'océan, on trouve donc tout naturellement des handiplages, équipées de WC PMR et d'activités inclusives, propices au divertissement pour tous.</p>
                                        <p id="fermeture9" style="text-indent: 20px">Le bassin en lui même est très attractif, de nombreuses maisons traditionnelles se dressent partout dans l'agglomération. Le parc Mauresque et le Musée de l'Aquarium, conclureont une belle ballade.</p>
                                        <p id="fermeture9" style="text-indent: 20px">Enfin, il est très facile de sortir de la ville en transport en commun et d'ainsi visiter les Landes et rejoindre la Dune du Pilat et les autres plages .</p>
                                        
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
                            <a href ="https://www.handiplusaquitaine.fr/etape/Le%20bassin%20d%20Arcachon" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
                                <p style="text-indent: 20px">Les Alpes ne sont pas les plus vieilles montagnes d'Europe, mais bien les plus hautes aujourd'hui. Elles abritent donc le Mont-Blanc, beffroi de l'Europe, qui veille sur les nombreux pays limitrophes.
                            </br> Les montagnes n'ont pas toujours été des destinations touristiques car peu praticables. La France a su valoriser ses richesse naturelles, et peut aujourd'hui se targuer d'avoir l'un des plus vastes parcours pédestres mondiaux, avec plus de 180 000km et une grande pluralité de pistes skiables .</p>
                            </br>
                            <p style="text-indent: 20px" class="font-weight-bold color-228b22"> Été comme hiver, les domaines sont aujourd'hui adaptés à l'accueil de tous les publics, de toutes nationalités. Vous pouvez donc maintenant parcourir la montagne par les airs, dévaler les pistes en hiver, gravir certains sommets et vous reposer le soir dans des hébergements adaptés et labéllisés.</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture10">
                                    <div>

                                        <p id="fermeture10" style="text-indent: 20px">Côté sport, des énormes avancées ont été faites et il vosu est maintenant possible de descendre les pistes de vélo en CIMGO, celles de ski en Handiski, de monter les sommets en joëlette ou encore de parcours le ciel, la p lupart des clubs de parapentes étant reconnus accessibles tout handicap.  </p>
                                        <p id="fermeture10" style="text-indent: 20px">Une bastronomie complète toujours la contemplation de beaux paysages. Il est désormais facile de sillonner les vallées à la rencontre de commerçants locaux ou de musées dédiés, accessibles à tous. Et de se restaurer, de nombreux établissements étant aujourd'hui aptes à l'accueil du public le plus large possible.</p>
                                        
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
                                <img src="img/vallee.jpg" class="img-fluid w-100" alt="le fameux pont d'Avignon">
                            </div>
                            <div class="col-12  col-lg-7 align-item-rigth text-justify">
                                <h4 class="mb-3">LA VALLÉE DU RHÔNE</h4>
                                <p style="text-indent: 20px">Vallon prolifique, la vallée du Rhône s'étend de Lyon au sud d'Arles, où le fleuve se jette dans la Méditerranée. Territoire viticole, agricole et touristique, la vallée du Rhône est un de ces joyaux naturels dont regorge la France. Si l'on imagine souvent des espaces sauvages inaccessibles, de gros efforts ont été faits pour permettre au maximum de personne de découvrir la région.</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > De la ville à la mer, en passant par les reliefs parfois arrides de l'Ardèche et la verdure de la Drôme, c'est plus de 200 hébergements labellisés Handi Tourisme, des dizaines de musées et parc et de nombreuses activitées proposées pour tous et toutes. La promesse d'un road trip réussi et riche en découverte ! Pour les amateurs et amatrices d'itinérance !</p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture11">
                                    <div>

                                        <p id="fermeture11" style="text-indent: 20px">Le Palais Idéal du Facteur Cheval est un immanquable de votre voyage. Musée incongru niché au coeur de la Drôme, ce musée est l'oeuvre d'un seul homme; Ferdinand Cheval. L'oeuvre est toujours entretenue pour faire perdurer les 33 ans de travail acharné qu'il a demandé, gardant en mémoire la volonté première de son créateur : le partager au plus grand nombre. Ainsi des visite en Langue des Signes sont possibles, des audio-guides à disposition et le tout accessible pour les personnes à mobilité réduite.</p>
                                        <p id="fermeture11" style="text-indent: 20px">Au coeur des vignes du Rhône, et à quelques minutes de Lyon, le Plateau d'Yzeron vous propose une aventure dans les arbres, labellisée lui aussi pour son accueil de tous les publics, et cerise sur le gateau, le Plateau vous propose après vos efforts, une  relaxation au SPA, au coeur de cette forêt. </p>
                                        <p id="fermeture11" style="text-indent: 20px">Puisque la vallée du Rhône est une région géogarphique mais aussi une appellation de vin, des plus gustatives, il vous sera aussi possible de visiter de nombreux domaines, ainsi que le Musée des Vignerons de Forez. Belle occasion de découvrir le travail, le quotidien et le vin de cette région. </p>
                                        
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
                            <a href ="http://pro.auvergnerhonealpes-tourisme.com/res/799ac9c933566e60eabe6caf83fb0145f40f6bea.pdf" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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
                                <p style="text-indent: 20px">La Citée Phocéenne est la plus ancienne ville de France, rythmée par les cultures . Fondée par les grecs, conquise par les latins, porte d'Entrée de la France à la Méditerranée, Marseille est une ville de brassages culturels !
                                Ville aux charmes inconstables, Marseille c'est la cité latine mais aussi les calanques sauvages .</p>
                                </br> <p style="text-indent: 20px" class="font-weight-bold color-228b22" > Le défi est de taille que de rendre cette vieille ville, aux rues étroites et aux nombreux escaliers, accessible. C'est pourtant le pari que se donne la ville depuis 2013 et le mandat de Capitale Européenne de la Culture. Qui eu pour vocation de faire rayonner la ville et ses cultures au plus grand nombre. </p>
                                <!-- en lire plus -->
                                <div class="collapse multi-collapse" id="fermeture12">
                                    <div>

                                        <p id="fermeture12" style="text-indent: 20px">En site de plein air, Marseille a rendu accessible la Canebière, le Vieux Port, le Jardin du Pharo, sa fameuse Basilique Notre Dame de la Garde et bien d'autres encore.</p>
                                        <p id="fermeture12" style="text-indent: 20px">La ville peut se targuer de nouveaux musées dont le Mucem, tous accessibles gratuitement et avec des équipements adaptés à tous les handicaps. L'avènement du numérique permet aussi de compléter la visite, notamment au Mucem (musée le plus récent de la ville).</p>
                                        <p id="fermeture12" style="text-indent: 20px">Pour conclure toute visite de Marseille, il vous faudra gouter une pizza sur le pouce, spécialité à la Canebière, mais aussi vosu rendre sur l'une des plages de la ville, où vous pourrez expérimenter de nombreuses activités aquatiques mais aussi une expérience unique en France de visite immersive de la ville grâce à la réalité virtuelle.</p>
                                        
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
                            <a href ="https://www.marseille-tourisme.com/organisez-votre-sejour/tourisme-et-handicap/" target="_blank"><button type="button" class="btn btn-outline-success color-228B22">M'y rendre</button> </a>
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

        <!-- JQUERY -->
        <script
            src         ="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin ="anonymous">
        </script>
        
        <!-- JAVASCRIPT -->
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