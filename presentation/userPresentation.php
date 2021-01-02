<?php function htmlUser(){
?>    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/connexionStyle.css">
    <link rel="stylesheet" href="../css/inscriptionStyle.css">
    <title> Formulaire</title>
</head>
<body>
<?php 
}
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
    <form class="tableau text-center m-2" action="../controller/controllerUserConnect.php?action=inscription" method="post">
        <h3 class="col titre mt-5 mb-5">Formulaire d'inscription</h3>
        <div class="mail col col-sm-5">
            <input required id="myTextFocusPseudo" class="col col-4 text-center form-control-plaintext" type="text" name="pseudo"  placeholder="Saisir votre pseudo"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-4 text-center form-control-plaintext" type="email" name="email"  placeholder="Saisir votre email"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-4 text-center form-control-plaintext" type="text" name="nom"  placeholder="Saisir votre nom"> <br/>
        </div>
        <div class="mail col col-sm-5">
            <input required class="col col-4 text-center form-control-plaintext" type="text" name="prenom"  placeholder="Saisir votre prenom"> <br/>
        </div>   
        <div class="mail col align-items-center text-center col-sm-5">
            <input requided class="col col-4 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mot de passe"> <br/>
            <hr>
        </div>
        <div class="fichier col col-sm-5">
            <input requided class="col col-4 text-center form-control-plaintext" type="file" name="photo" placeholder="Selectionner votre photo ci dessous"> <br/>
            <hr>
        </div>    
            <button class="btnConnexion col col-lg-2 text-center btn btn-primary mt-3" type="submit" name="inscrire">S'inscrire</button>    
    </form>
    <div class="row text-center">
        <a href='../controller/controllerUserConnect.php?action=connexion'>
            <button class='btnConnexion col col-lg-2 text-center btn btn-primary mb-4'> Se connecter</button>
        </a>
        <a href='../main.php'>
            <button type="submit" class="retour col col-lg-4 text-center m-2 "><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>           
        </a>
    </div>
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
        <form class="tableau text-center m-5" action="../controller/controllerUserConnect.php?action=connect" method="post">
            <h3 class="titre m-3">Connexion</h3>
            <div class="mail col-sm-5">
                <input required id="myTextFocusEmail" class="col-4 text-center form-control-plaintext" type="email" name="email"  placeholder="Saisir votre email"> <br/>
                <hr class="m-0">
            </div>
            <div class="mail col-sm-5 mt-2">
                <input requided class="col-4 col-lg-2 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mdp"> <br/>
            </div>
            <button class="btnInscription col-4 col-lg-3 text-center btn btn-primary " type="submit" name="connecter" >Connexion</button>    
        </form>
        <div class="text-center">
            <a href='../navbar.php'>
                <button type="submit" class="retour col-4 text-center btn btn-dark m-2 "><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>
            </a>
        </div>
<?php
}

function modification($userEdit, $errorCode=null){
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
                <input id="myTextFocusPseudoModif" class="col-4 text-center form-control-plaintext" type="text" name="pseudo" value="<?php echo $userEdit->getPseudo()?>" placeholder="Modifiez votre pseudo" ></br>
            </div>
            <div class="mail col col-sm-5">
                <input readonly class="col-4 text-center form-control-plaintext " type="email" name="email" value="" placeholder=" Modifiez votre email" ><br/>
            </div>
            <div class="mail col col-sm-5">
                <input class="col-4 text-center form-control-plaintext" type="text" name="nom" value="" placeholder="Modifiez votre nom" > <br/>
            </div>
            <div class="mail col col-sm-5">    
                <input class="col-4 text-center form-control-plaintext" type="text" name="prenom" value="" placeholder="Modifiez votre prenom" > <br/>
            </div>
            <div class="mail col col-sm-5">
                <input class="col-4 text-center form-control-plaintext" type="password" name="password" value="" placeholder="Modifiez votre password" > <br/>
            <hr>
            </div>
            <div class="fichier col col-sm-5">
                <input class="col col-4 text-center form-control-plaintext " type="file" name="photo" value="" placeholder="Modifiez votre photo"> <br/>
            <hr>
            </div>  
            
            <input type="submit" class="btnConnexion col col-lg-2 text-center btn btn-primary mb-4 mt-3" value="Modifier"/>
        </form>
        <div class="col-12 text-center mb-">
            <a href='../navbar' class='text-white'>
                <button type="submit" class='retour col-4 text-center btn btn-dark m-2 '><i class="fas fa-sign-in-alt"></i> Retour à la page d'accueil</button>
            </a>    
        </div>
<?php 
}
?>   
    <script>
        window.onload = function(){
            document.getElementById('myTextFocusPseudo').focus();
        }
        window.onload = function(){
            document.getElementById('myTextFocusEmail').focus();
        }
        window.onload = function(){
            document.getElementById('myTextFocusPseudoModif').focus();
        }
    </script>
</body>
</html>