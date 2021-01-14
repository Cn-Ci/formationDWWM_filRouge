
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
        <div class="mail col col-sm-5">
            <input required class="col col-12 text-center form-control-plaintext" type="email" name="email"  placeholder="Saisir votre email"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-12 text-center form-control-plaintext" type="text" name="nom"  placeholder="Saisir votre nom"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-12 text-center form-control-plaintext" type="text" name="prenom"  placeholder="Saisir votre prenom"> <br/>
        </div>   
        <div class="mail col align-items-center text-center col-sm-5">
            <input requided class="col col-12 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mot de passe"> <br/>
            <hr>
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