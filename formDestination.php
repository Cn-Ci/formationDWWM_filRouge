<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>MOBILI'T - ajout d'article</title>
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
            href="footerStyle.css">
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
    <div class="modal fade" id="modalAddDestination" tabindex="-1" role="dialog" aria-labelledby="modalAddDestinationLabel" aria-hidden="true">
            <div role="document">
                <div class="modal-content">
                    <!-- header du modal -->
                    <div class="modal-header ">
                        <h5 class="modal-title " id="modalAddDestinationLabel">Ajouter un nouvel article destination</h5>
                        <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- formulaire d'inscription -->
                    <div class="globalConnexion text-center p-2">
                        <form action="destinationPresentation.php?action=ajoutDestination" method="post">
                            <!-- Region -->
                            <div class="form-group">
                                <label for="selectRegion">Choisissez une région de France</label>
                                <select class="form-control" id="selectRegion">
                                    <option>est</option>
                                    <option>ouest</option>
                                    <option>sud ouest</option>
                                    <option>sud est</option>
                                </select>
                            </div>
                            <!-- lieu -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="lieuDestination">Lieu </label>
                                    <input type="text" class="form-control" id="lieuDestination" placeholder="Ville ou zone" alt="Saisissez le nom du lieu que vous souhaitez faire découvrir">
                                </div>
                            </div>
                            <!-- Image -->
                            <div>
                                <label for="photoDestination">Photo</label>
                                <input type="file" class="form-control" id="photoDestination" alt="Veillez téléverser une photo illustrant le lieu proposé">
                            </div>
                            <!-- Petite description -->
                            <div class="form-group">
                                <label for="introDestination">Description introductive</label>
                                <input type="text" class="form-control" minlength="10" maxlength="255" id="introDestination" placeholder="Veillez saisir un texte court d'introduction au lieu" alt="Veillez saisir une petite introduction du lieu présenté" >
                            </div>
                            <div class="form-group">
                                <label for="descriptionDestination">Description du lieu</label>
                                <input type="text" class="form-control" minlength="100" maxlength="500" id="descriptionDestination" placeholder="Veillez décrire plus précisémment le lieu a visiter" alt="Veillez saisir description précise et détaillée du lieu à visiter" required>
                            </div>
                            <div class="form-group">
                                <label for="atout1Destination">Premier atout</label>
                                <input type="text" class="form-control" minlength="100" maxlength="300" id="atout1Destination" placeholder="Premier atout du lieu proposé" alt="Présenter le premier atout du lieu proposé en visite" required>
                            </div>
                            <div class="form-group">
                                <label for="atout2Destination">Deuxième atout</label>
                                <input type="text" class="form-control" minlength="100" maxlength="300" id="atout2Destination" placeholder="Deuxième atout du lieu proposé" alt="Présenter le deuxième atout du lieu proposé en visite" required>
                            </div>
                            <div class="form-group">
                                <label for="atout3Destination">Deuxième atout</label>
                                <input type="text" class="form-control" minlength="100" maxlength="300" id="atout2Destination" placeholder="Troisième atout du lieu proposé" alt="Présenter le troisième atout du lieu proposé en visite" >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success color-228B22 mb-10" id="boutonsubmit"> Valider l'inscription </button> </br>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

 
    </body>
</html>