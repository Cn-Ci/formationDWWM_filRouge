<?php 
    if (!isset($_SESSION) || $_SESSION['profil'] != 'administrateur') {
       header('../controller/controleurMain.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire ajout personnel</title>
         <!-- BOOTSTRAP -->
         <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
            crossorigin="anonymous">
    </head>
    
    <body>
        <?php
            //* FORMULAIRE AJOUT PERSONNEL
            function renderForm(?Personnel $personnel) :Void {
                ?>
                <div class="container m-5">
                    <div class="row">
                        
                        <div class="col-sm-8 offset-2">
                            <h1 class="text-center"><?php if($personnel){ echo "Formulaire de modification ";}else{echo "Formulaire Ajout";} ?></h1>
                            <form action="../controller/controlleurFormAddEmploye.php?action=<?php if($personnel){ echo "modifie&id=". $personnel->getId() ;}else{echo "ajoute" ;}?>" method="post">
                                <!-- NOM -->
                                <div class="form-group">
                                    <label>Nom *</label>
                                    <input type="text" class="form-control" name="nom" value="<?php if($personnel){ echo  $personnel->getNom() ;}?>" required>
                                </div>
                                <!-- PRENOM -->
                                <div class="form-group">
                                    <label>Prénom *</label>
                                    <input type="text" class="form-control" name="prenom" value="<?php if($personnel){ echo  $personnel->getPrenom() ;}?>" required>
                                </div>
                                <!-- Photo -->
                                <div class="form-group">
                                    <label>Photo *</label>
                                    <input type="text" class="form-control" name="photo" value="<?php if($personnel){ echo  $personnel->getPhoto() ;}?>" required>
                                </div>
                                 <!-- EMPLOI -->
                                 <div class="form-group">
                                    <label>Emploi *</label>
                                    <input type="text" class="form-control" name="emploi" value="<?php if($personnel){ echo  $personnel->getEmploi() ;}?>" required>
                                </div>
                                <!-- DESCRIPTION -->
                                <div class="form-group">
                                    <label>Description *</label>
                                    <input type="textarea" class="form-control" name="description" value="<?php if($personnel){ echo $personnel->getDescription() ;}?>" required>
                                </div>
                                <!-- LINK FACEBOOK -->
                                <div class="form-group">
                                    <label>Lien facebook</label>
                                    <input type="text" class="form-control" name="LinkFB" value="<?php if($personnel){ echo  $personnel->getFbLink() ;}?>" >
                                </div>
                                <!-- LINK TWITTER -->
                                <div class="form-group">
                                    <label>Lien Twitter</label>
                                    <input type="text" class="form-control" name="LinkTW" value="<?php if($personnel){ echo  $personnel->getTwLink() ;}?>">
                                </div>
                                <!-- LINK LINKEDIN -->
                                <div class="form-group">
                                    <label>Lien Linkedin</label>
                                    <input type="text" class="form-control" name="LinkLI" value="<?php if($personnel){ echo  $personnel->getLiLink() ;}?>" >
                                </div>

                                <input name="<?php if($personnel){ echo "modifier" ;}else{echo "ajouter";}?>" type="submit" class="btn btn-primary"></input>
                            </form>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <?php 
            }
           
            function displayButtons(){ ?>
                <div class="col-10 offset-3">
                    <h3 class="col-10 m-3">L'ajout a bien été effectué, désirez vous :</h3> 
                    <div class="col-12 row m-5">
                        <div class="col-6 ">
                            <a class="btn btn-outline-secondary" href="../controller/controlleurFormAddEmploye.php?action=ajouter" role="button">+ Ajouter un nouvel employé</a>
                        </div>
                        <div class="col-6 ">
                            <a class="btn btn-outline-success" href="../controller/controleurMain.php" role="button">Revenir sur la page principale</a>
                        </div>
                    </div>
                </div>
            <?php }

        ?> 
    </body>
</html>