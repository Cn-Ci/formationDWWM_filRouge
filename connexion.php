<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="connexionStyle.css">
    <title>Inscription</title>
</head>
<body>
    <form class="tableau text-center m-5" action="../controller/controllerUtilIndex.php?action=inscription" method="post">
        <h3 class="titre m-3">Connexion</h3>
        <div class="mail col-sm-5">
            <input required class="col-4 text-center form-control-plaintext" type="text" name="username"  placeholder="Saisir votre email"> <br/>
            <hr class="m-0">
        </div>
        <div class="mail col-sm-5 mt-2">
            <input requided class="col-4 col-lg-2 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mdp"> <br/>
        </div>
        <button class="btnInscription col-4 col-lg-3 text-center btn btn-primary " type="submit" name="connexion" >Connexion</button>    
    </form>
    <div class="text-center">
        <a href='../controller/controllerUtilIndex.php'>
            <button type="submit" class="retour col-4 text-center btn btn-dark m-2 ">Retour à la page d'accueil</button>
        </a>
    </div>
    
</body>
</html>