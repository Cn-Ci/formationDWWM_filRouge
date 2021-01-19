<?php 
    require_once('../presentation/formAdd_Personnel.php');
    

            try {
            /**_ INSCRIPTION - Verification email _________**/
            $employe = new employe;
            $employe->setNom(htmlentities($_POST['nom']))
                ->setPrenom(htmlentities($_POST['prenom']))
                ->setEmploi(htmlentities($_POST['emp']))
                ->setDescription(htmlentities($_POST['description']))
                ->setPhoto(htmlentities($_POST['photo']))
                ->setLinkFB(htmlentities($_POST['fb']))
                ->setLINKTW(htmlentities($_POST['tw']))
                ->setLINKLI(htmlentities($_POST['li']));

            serviceAddPersonne($employe);
            }
            catch (ServiceException $se){
                /**_ INSCRIPTION - Affichage erreur  _______**/
                echo "test 9 affichager page inscription KO --- ";

                inscription($se->getMessage(), $se->getCode());
            } 
         