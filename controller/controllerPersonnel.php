<?php 
    require_once('../presentation/personnelPresentation.php');
    require_once('../service/ServicePersonnel.php');

    session_start();
    $_SESSION['profil']="administrateur";
    $personnels = ServicePersonnel :: searchAllPersonnels();
    afficherPersonnel($personnels);
    

        if(isset($_POST) && !empty($_POST)){
            try {
            /**_ INSCRIPTION - Verification email _________**/
            $personnel = new Personnel;
            $personnel->setNom(htmlentities($_POST['nom']))
                ->setPrenom(htmlentities($_POST['prenom']))
                ->setEmploi(htmlentities($_POST['emp']))
                ->setDescription(htmlentities($_POST['description']))
                ->setPhoto(htmlentities($_POST['photo']))
                ->setLinkFB(htmlentities($_POST['fb']))
                ->setLINKTW(htmlentities($_POST['tw']))
                ->setLINKLI(htmlentities($_POST['li']));

            serviceAddPersonne($personnel);
            }
            catch (ServiceException $se){
                /**_ INSCRIPTION - Affichage erreur  _______**/
                echo "test 9 affichager page inscription KO --- ";

                inscription($se->getMessage(), $se->getCode());
            } 
        }
            
         