

    <div class="container">
        <div class="globalConnexion text-center p-2 col-10 offset-1">
            <form action="destinationPresentation.php?action=ajoutDestination" method="post">
                <!-- Region -->
                <div class="form-group">
                    <div class="form-row align-items-center">
                        <div class="col-6">
                        <!-- lieu -->
                            <div class="form-group ">
                                <label for="lieuDestination">Lieu </label>
                                <input type="text" class="form-control" id="lieuDestination" placeholder="Ville ou zone" alt="Saisissez le nom du lieu que vous souhaitez faire découvrir">
                            </div>
                        
                            <div class="form-group ">
                                <label for="selectRegion">Choisissez une région de France</label>
                                <select class="form-control" id="selectRegion">
                                    <option>nord est</option>
                                    <option>nord ouest</option>
                                    <option>sud est</option>
                                    <option>sud ouest</option>
                                </select>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="col-6 ">
                            
                                <label for="photoDestination">Photo</label>
                                <input type="file" class="form-control h-100 " id="photoDestination" alt="Veillez téléverser une photo illustrant le lieu proposé">
                            
                        </div>
                    </div>
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
                <div class="form-group">
                    <label for="lienSiteWeb">Lien vers un site web </label>
                    <input type="text" class="form-control" maxlength="300" id="lienSiteWeb" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à plus d'informations pour cette destination">
                </div>
                <div class="form-group">
                    <label for="lienExtraitForum">Lien vers un extrait du forum </label>
                    <input type="text" class="form-control" maxlength="300" id="lienExtraitForum" placeholder="ex : www.handitourisme-champagne.org" alt="Veuillez saisir un lien pour accéder à un sujet du forum pertinent">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-2 offset-5" style="background-color: #228b22;border: black;">Submit</button> 
    </div>