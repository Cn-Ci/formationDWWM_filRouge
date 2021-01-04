<?php 
    if ($_SESSION['ROLE'] != 'administrateur') {
        header('main.php');
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
            function renderAddForm() :Void {
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h1 class="text-center">Formulaire Ajout</h1>
                            <form action="../Controleur/controleur_Employe.php" method="post">
                                <!-- NOM -->
                                <div class="form-group">
                                    <label>Nom *</label>
                                    <input type="text" class="form-control" name="nom" required>
                                </div>
                                <!-- PRENOM -->
                                <div class="form-group">
                                    <label>Prénom *</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                                 <!-- EMPLOI -->
                                 <div class="form-group">
                                    <label>Emploi *</label>
                                    <input type="text" class="form-control" name="emploi" required>
                                </div>
                                <!-- DESCRIPTION -->
                                <div class="form-group">
                                    <label>Description *</label>
                                    <input type="textarea" class="form-control" name="description" required>
                                </div>
                                <!-- LINK FACEBOOK -->
                                <div class="form-group">
                                    <label>Lien facebook</label>
                                    <input type="text" class="form-control" name="LinkFB">
                                </div>
                                <!-- LINK TWITTER -->
                                <div class="form-group">
                                    <label>Emploi</label>
                                    <input type="text" class="form-control" name="LinkTW">
                                </div>
                                <!-- LINK LINKEDIN -->
                                <div class="form-group">
                                    <label>Emploi</label>
                                    <input type="text" class="form-control" name="LinkLI">
                                </div>

                                <input name="add" type="submit" class="btn btn-primary"></input>
                            </form>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
                <?php 
            }
            //* FORMULAIRE MODIF PERSONNEL
            function renderModifyForm(String $nom, String $prenom, String $emp, String $desc, ?string $fb, ?string $tw, ?string $li) :Void {
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h1 class="text-center">Formulaire Modif</h1>
                            <form action="../Controleur/controleur_Employe.php" method="post">
                                <!-- NOM -->
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" value="<?php echo $nom ?>" required>
                                </div>
                                <!-- PRENOM -->
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" value="<?php echo $prenom ?>" required>
                                </div>
                                <!-- EMPLOI -->
                                <div class="form-group">
                                    <label for="Emp">Emploi</label>
                                    <input type="text" class="form-control" name="emploi" value="<?php echo $emp ?>" required>
                                </div>
                                <!-- DESCRIPTION -->
                                <div class="form-group">
                                    <label>Description *</label>
                                    <input type="textarea" class="form-control" name="description" value="<?php echo $desc?>" required>
                                </div>
                                <!-- LINK FACEBOOK -->
                                <div class="form-group">
                                    <label>Lien facebook</label>
                                    <input type="text" class="form-control" name="LinkFB"  value="<?php echo $fb?>">
                                </div>
                                <!-- LINK TWITTER -->
                                <div class="form-group">
                                    <label>Emploi</label>
                                    <input type="text" class="form-control" name="LinkTW"  value="<?php echo $tw?>">
                                </div>
                                <!-- LINK LINKEDIN -->
                                <div class="form-group">
                                    <label>Emploi</label>
                                    <input type="text" class="form-control" name="LinkLI"  value="<?php echo $li?>">
                                </div>

                                <input name="modify" type="submit" class="btn btn-primary mb-3" value="Modifier"/>
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