<?php 
    //if ($_SESSION['ROLE'] != 'administrateur') {
    //    header('main.php');
    //}
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
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h1 class="text-center"><?php if($personnel){ echo "Formulaire de modification ";}else{echo "Formulaire Ajout";} ?></h1>
                            <form action="../controller/controlleurFormAddEmploye.php?action=<?php if($personnel){ echo "modifier?id=". $personnel->getId() ;}else{echo "ajouter" ;}?>" method="post">
                                <!-- NOM -->
                                <div class="form-group">
                                    <label>Nom *</label>
                                    <input type="text" class="form-control" name="nom" <?php if($personnel){ echo "value=". $personnel->getNom() ;}?> required>
                                </div>
                                <!-- PRENOM -->
                                <div class="form-group">
                                    <label>Prénom *</label>
                                    <input type="text" class="form-control" name="prenom" <?php if($personnel){ echo "value=". $personnel->getPrenom() ;}?> required>
                                </div>
                                <!-- Photo -->
                                <div class="form-group">
                                    <label>Photo *</label>
                                    <input type="text" class="form-control" name="photo" <?php if($personnel){ echo "value=". $personnel->getPhoto() ;}?> required>
                                </div>
                                 <!-- EMPLOI -->
                                 <div class="form-group">
                                    <label>Emploi *</label>
                                    <input type="text" class="form-control" name="emploi" <?php if($personnel){ echo "value=". $personnel->getEmploi() ;}?> required>
                                </div>
                                <!-- DESCRIPTION -->
                                <div class="form-group">
                                    <label>Description *</label>
                                    <input type="textarea" class="form-control" name="description" <?php if($personnel){ echo "value=". $personnel->getDescription() ;}?> required>
                                </div>
                                <!-- LINK FACEBOOK -->
                                <div class="form-group">
                                    <label>Lien facebook</label>
                                    <input type="text" class="form-control" name="LinkFB" <?php if($personnel){ echo "value=". $personnel->getFbLink() ;}?> >
                                </div>
                                <!-- LINK TWITTER -->
                                <div class="form-group">
                                    <label>Lien Twitter</label>
                                    <input type="text" class="form-control" name="LinkTW" <?php if($personnel){ echo "value=". $personnel->getTwLink() ;}?>>
                                </div>
                                <!-- LINK LINKEDIN -->
                                <div class="form-group">
                                    <label>Lien Linkedin</label>
                                    <input type="text" class="form-control" name="LinkLI" <?php if($personnel){ echo "value=". $personnel->getLiLink() ;}?> >
                                </div>

                                <input name="<?php if($personnel){ echo "modifier" ;}else{echo "ajouter";}?>" type="submit" class="btn btn-primary"></input>
                            </form>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <?php 
            }
           
        ?> 
    </body>
</html>