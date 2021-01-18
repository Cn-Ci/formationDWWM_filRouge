
<?php 
function inscription($errorCode=null){
    if($errorCode && $errorCode == 1062){
        echo "<center><div class='alert alert-danger'> Cet utilisateur existe déjà ! !</div></center>";
    }
    elseif($errorCode && $errorCode == 23001){
        echo "<center><div class='alert alert-danger'> Erreur lors d'inscription ! !</div></center>";
    } 
    elseif($errorCode && $errorCode == 23002){
        echo "<center><div class='alert alert-danger'> Erreur lors de l'affichage de la page d'inscription ! !</div></center>";
    } 
    elseif($errorCode && $errorCode == 23004){
        echo "<center><div class='alert alert-danger'> Erreur lors de la connexion, vérifiez vos identifiant ! !</div></center>";
    } 
    elseif($errorCode && $errorCode == 24001){
        echo "<center><div class='alert alert-success'> Féliciation ! Vous êtes inscrit !</div></center>";
    }
?>
<head>
<?php 
include_once('../templates/header.php');
?>
    <title>Mobili'T - Inscription</title>
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../assets/inscriptionStyle.css">
</head>
    <form class="tableau text-center m-2" action="../controller/controllerUserConnect.php?action=inscription" method="post">
        <h3 class="col titre mt-5 mb-5">Formulaire d'inscription</h3>
        <div class="mail col col-sm-5">
            <input required id="myTextFocusPseudo" class="col col-12 text-center form-control-plaintext" type="text" name="pseudo"  placeholder="Saisir votre pseudo"> <br/>
        </div>
        <div id="pseudo_verif" class="alert alert-danger text-center">
            <span class="pseudo">
                <span class="pseudo_not_exist"><i class="fas fa-check-circle"></i></span>
                <span class="pseudo_exist"><i class="fas fa-exclamtion-circle"></i>Ce pseudo existe déjà !</span>
            </span>
        </div>
        <div class="mail col col-sm-5">
            <input required id="email_inscription" class="col col-12 text-center form-control-plaintext" type="email" name="email"  placeholder="Saisir votre email"> <br/>
        </div>
        <div id="email_verif" class="alert text-center">
            <span class="email">
                <span class="email_not_exist"><i class="fas fa-check-circle"></i></span>
                <span class="email_exist"><i class="fas fa-exclamtion-circle"></i>Cet adresse e-mail existe déjà !</span>
            </span>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-12 text-center form-control-plaintext" type="text" name="nom"  placeholder="Saisir votre nom"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-12 text-center form-control-plaintext" type="text" name="prenom"  placeholder="Saisir votre prenom"> <br/>
        </div>   
        <div class="mail col align-items-center text-center col-sm-5">
            <input requided id ="password_inscription" class="col col-12 text-center form-control-plaintext"  type="password" name="password" placeholder="Saisir votre mot de passe"> <br/>       
        </div>
        <div class="mail col align-items-center text-center col-sm-5">
            <input requided id ="confirm_password_inscription" class="col col-12 text-center form-control-plaintext"  type="password" name="password" placeholder="Confirmer votre mot de passe"> <br/>       
        </div>
        <div class="row">
            <div class="col-12">
                <div id="jumbo" class="jumbotron p-1 m-1">Le mot de passe doit comporter au moins 
                    <div class="col-12">
                        <span class="caracteres">
                            <span class="caracteres_ok"><i class="fas fa-check-circle"></i></span>
                            <span class="caracteres_pas_ok"><i class="fas fa-times-circle"></i></span><b>8 caractères</b>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="chiffre">
                            <span class="chiffre_ok"><i class="fas fa-check-circle"></i></span>
                            <span class="chiffre_pas_ok"><i class="fas fa-times-circle"></i></span><b>1 chiffres</b>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="majuscule">
                            <span class="majuscule_ok"><i class="fas fa-check-circle"></i></span>
                            <span class="majuscule_pas_ok"><i class="fas fa-times-circle"></i></span><b>1 majuscule</b>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="identique">
                            <span class="identique_ok"><i class="fas fa-check-circle"></i></span>
                            <span class="identique_pas_ok"><i class="fas fa-times-circle"></i></span><b>Les 2 mots de passe sont identiques</b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fichier col col-sm-5">
            <input requided class="col col-12 text-center form-control-plaintext" type="file" name="photo" placeholder="Selectionner votre photo ci dessous"> <br/>
            <hr>
        </div>    
            <button class="btnConnexion col col-lg-2 text-center btn btn-primary mt-3" type="submit" name="inscrire">S'inscrire</button>    
    </form>
    <div class="row text-center">
        <a href='../controller/controllerUserConnect.php?action=connexion'>
            <button class='btnInscription col col-lg-2 text-center btn btn-primary mb-4'> Se connecter</button>
        </a>
        <a href='../controller/controleurMain.php'>
            <button type="submit" class="retour col col-lg-4 text-center m-2 "><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>           
        </a>
    </div>

    <script>
        window.onload = function(){
            document.getElementById('myTextFocusPseudo').focus();
        }
    </script>
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
                src="../assets/userScript.js">
            </script>
<?php
}

function connection($errorCode=null){
    if($errorCode && $errorCode == 23003){
        echo "<center><div class='alert alert-danger'> Erreur lors de l'affichage de la page de Connection! !</div></center>";
    }
    elseif($errorCode && $errorCode == 24002){
        echo "<center><div class='alert alert-success'> Bonjour Toto, vous êtes bien connecté ! !</div></center>";
    }
    ?>
<head>
<?php 
include_once('../templates/header.php');
?>
    <title>Mobili'T - Connexion</title>
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../assets/connexionStyle.css">
</head>
        <form class="tableau text-center m-5" action="../controller/controllerUserConnect.php?action=connect" method="post">
            <h3 class="titre m-3">Connexion</h3>
            <div class="mail col-sm-5 mt-2 ">
                <input required id="myTextFocusEmail" class="col-4 col-lg-12 text-center form-control-plaintext rounded" type="email" name="email"  placeholder="Saisir votre email"> <br/>
                <hr class="m-0">
                
            </div>
            <div class="mail col-sm-5 mt-2">
                <input requided class="col-4 col-lg-12 text-center form-control-plaintext rounded" type="password" name="password" placeholder="Saisir votre mdp"> <br/>
            </div>
            <button class="btnConnexion col-4 col-lg-3 text-center btn btn-primary " type="submit" name="connecter" >Connexion</button>    
        </form>
        <div class="text-center">
            <a href='../controller/controleurMain.php'>
                <button type="submit" class="retour col-4 text-center btn btn-dark m-2 "><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>
            </a>
        </div>
        <script>
        window.onload = function(){
            document.getElementById('myTextFocusEmail').focus();
        }
    </script>
<?php
}
?>
<head>
<?php 
include_once('../templates/header.php');
?>
    <title>Mobili'T - Modification</title>
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../assets/inscriptionStyle.css">
</head>
<?php
function modification($user, $errorCode=null){
    if($errorCode && $errorCode == 24005){
        echo "<div class='alert alert-danger'> Erreur lors de l'affichage de la page du formulaire de modification !</div>";
    }
    elseif($errorCode && $errorCode == 23006){
        echo "<center><div class='alert alert-danger'> Erreur lors de la modification ! !</div></center>";
    } 
    elseif($errorCode && $errorCode == 24003){
        echo "<center><div class='alert alert-success'> Votre modification a bien été enregistré !</div></center>";
    } 
?>
        <form class="tableau text-center m-2" action="../controller/controllerUserConnect.php?action=modifierOK" method="post"> 
            <h3 class="col titre mt-5 mb-5"><i class="fas fa-pen"></i> Formulaire de modification</h3>
            <div class="mail col col-sm-5">
                <input id="myTextFocusPseudoModif" class="col-4 col-lg-12 text-center form-control-plaintext" type="text" name="pseudo" value="<?php echo $user->getPseudo()?>" placeholder="Modifiez votre pseudo" ></br>
            </div>
            <div class="mail col col-sm-5">
                <input readonly class="col-4 col-lg-12 text-center form-control-plaintext " type="email" name="email" value="<?php echo $user->getEmail()?>" placeholder=" Modifiez votre email" ><br/>
            </div>
            <div class="mail col col-sm-5">
                <input class="col-4 col-lg-12 text-center form-control-plaintext" type="text" name="nom" value="<?php echo $user->getNom()?>" placeholder="Modifiez votre nom" > <br/>
            </div>
            <div class="mail col col-sm-5">    
                <input class="col-4 col-lg-12 text-center form-control-plaintext" type="text" name="prenom" value="<?php echo $user->getPrenom()?>" placeholder="Modifiez votre prenom" > <br/>
            </div>
            </div>
            <div class="fichier col col-sm-5">
                <input class="col-4 col-lg-12 text-center form-control-plaintext" type="file" name="photo" value="<?php echo $user->getPhoto()?>" placeholder="Modifiez votre photo"><br/>
                <hr>
            </div>  
            
            
            <input type="submit" class="btnConnexion col col-lg-2 text-center btn btn-primary mb-4 mt-3" value="Modifier"/>
        </form>
        <div class="col-12 text-center mb-">
            <a href='../controller/controleurMain.php' class='text-white'>
                <button type="submit" class='retour col-4 text-center btn btn-dark m-2 '><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>
            </a>    
        </div>
        <script>
            window.onload = function(){
                document.getElementById('myTextFocusPseudoModif').focus();
            }
        </script>
<?php 
}
?>   
    
</body>
</html>