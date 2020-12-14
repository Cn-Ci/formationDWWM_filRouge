<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="inscriptionStyle.css">
    <title>Inscription</title>
</head>
<body>

    <form class="tableau text-center m-5" action="../controller/controllerUtilIndex.php?action=connect" method="post">
        <h3 class="m-5">Formulaire d'inscription</h3>
        <div class="mail col-sm-5">
            <input required class="col-4 text-center form-control-plaintext" type="text" name="pseudo"  placeholder="Saisir votre pseudo"> <br/>
        </div>
        <div class="mail col-sm-5">
            <input required class="col-4 text-center form-control-plaintext" type="text" name="username"  placeholder="Saisir votre email"> <br/>
        </div>
        <div class="mail col-sm-5">
            <input required class="col-4 text-center form-control-plaintext" type="text" name="prenom"  placeholder="Saisir votre prenom"> <br/>
        </div>
        <div class="mail col-sm-5">
            <input requided class="col-4 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mot de passe"> <br/>
        </div>    
        <div class="mail col-sm-5">
            <input requided class="col-4 text-center form-control-plaintext" type="password" name="password" placeholder="Saisir votre mot de passe"> <br/>
            <hr>
        </div>
        <div class="mail col-sm-5">
            <input requided class="col-4 text-center form-control-plaintext" readonly type="password" name="password" placeholder="Selectionner votre photo ci dessous"> <br/>
            <input type="file" id="file" name="file" multiple>
            <hr>
        </div>
            <button class="btnConnexion col-3 text-center btn btn-primary mt-3" type="submit" name="inscrire" >S'inscrire</button>    
    </form>
    <div class="text-center">
        <a href='../controller/controllerUtilIndex.php'>
            <button type="submit" class="retour col-4 text-center m-2 ">Retour à la page d'accueil</button>
        </a>
    </div>
    

</body>
</html>