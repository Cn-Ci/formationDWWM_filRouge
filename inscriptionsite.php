
<!-- Modal -->
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header ">
            <h5 class="modal-title " id="exampleModalLabel">Espace perso</h5>
            <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="globalConnexion text-center">
            <!-- image -->
            <div id="imageCo">
                <!-- JAVASCRIPT 
                <script LANGUAGE="JavaScript">
                    
                    document.write("<body>");
                    var tab = new Array("img/icone1.jpg","img/icone2.jpg","img/icone3.jpg", "img/icone4.jpg", "img/icone5.jpg", "img/icone6.jpg");
                    //le tableau d'images aléatoires

                    var n = parseInt( Math.random() * tab.length)
                    while (isNaN(n)) {
                    n = parseInt( Math.random() * tab.length)
                    }
                </script>  -->

                <!-- IMAAAAAAAAAAAAAAAAAAGE -->
                <img src="/img/icone1.jpg" class="img-fluid">
            </div>
            <!-- identifiant et mdp -->
            <div class="identifantsCo justify-content-center pt-3 ">
                <!-- identifiant -->
                <div class="identifiants justify-content-center row">
                    <div id="iconeID col-7 justify-content-right">
                        <img src="img/id.png">
                    </div>
                    <div class="formID col-5">
                        <form action="formdatas.php?action=connexion" method="post">
                            <input type="text" name="identifiant" id="identifiant" alt="votre nom d'identifiant" placeholder="Identifiant" required>
                    </div>
                </div>
                <hr class="style1 color-228b22" id="separateur"></hr>
                <!-- mot de passe -->
                <div class="identifiants pt-3 row justify-content-center" id="">
                    <div id="iconeLOCK col-4">
                        <img src="./img/locker.png">
                    </div>
                    <div>
                        <div class="formPW col-8">
                            <input type="password" id="pass" name="password"  alt="votre mot de passe" heigth="40px" pattern="(?=^.{8,30}$)((?=.*\d)|(?=.*\W+))(?![\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Un mot de passe de 8 à 30 caractères, comprenant un nombre ou un caractère spécial, une majuscule et une minuscule."
                                placeholder="*********" required>
                        </div>
                        <div>
                            <p> <a href="www.jaiperdumonmodp.com" class="text-success" id="mdpoublié"> Mot de passe oublié ? </a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success color-228B22 mb-10" id="boutonsubmit"> Se connecter </button></br>
            <button type="button" class="btn btn-success color-228b22" id ="boutonisncription" data-toggle="modal" data-target="#modalInscription">S'inscrire</button>
            <!-- Modal dans le modal -->
            <div class="modal fade" id="modalInscription" tabindex="-1" role="dialog" aria-labelledby="modalInscriptionLabel" aria-hidden="true">
                <div role="document">
                    <div class="modal-content">
                    <!-- header du modal -->
                        <div class="modal-header ">
                            <h5 class="modal-title " id="modalInscriptionLabel">Voici le formulaire d'inscription</h5>
                            <button type="button" class="close pt-2" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- formulaire d'inscription -->
                        <div class="globalConnexion text-center p-2">
                            <form action="formdatas.php?action=inscription" method="post">
                                
                            <!-- pseudo -->
                                <div class="form-group ">
                                <label for="inputPseudo">Pseudo</label>
                                    <input type="text" class="form-control" id="inputPseudo" placeholder="Saisissez un pseudo" alt="Choisissez un Pseudo">
                                </div>
                                <!-- nom et prénom -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputNom">Nom</label>
                                        <input type="text" class="form-control" id="inputNom" placeholder="Votre nom" alt="Saisissez votre nom">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPrenom">Prénom</label>
                                        <input type="text" class="form-control" id="inputPrenom" placeholder="Votre prénom" alt="Saisissez votre prénom">
                                    </div>
                                </div>
                                <!-- Numéro de téléphone -->
                                <div>
                                    <label for="inputNumero">Numéro</label>
                                    <input type="text" class="form-control" id="inputNumero" alt="Saisissez votre numéro de téléphone" placeholder="Votre numéro"
                                    pattern ="(?=.*\d){10}">
                                </div>

                                <!-- Email et confirmation -->
                                <div class="form-group">
                                <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Votre email" alt="Saisissez votre email">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPW1">Saisir un mot de passe</label>
                                        <input type="text" class="form-control" id="inputPW1" placeholder="********" alt="Saisissez un mot de passe"
                                        pattern="(?=^.{8,30}$)((?=.*\d)|(?=.*\W+))(?![\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Un mot de passe de 8 à 30 caractères, comprenant un nombre ou un caractère spécial, une majuscule et une minuscule."
                                        required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPW2">Confirmation</label>
                                        <input type="text" class="form-control" id="inputPW2" placeholder="********" alt="Confirmer votre mot de passe">
                                    </div>

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
</div>
