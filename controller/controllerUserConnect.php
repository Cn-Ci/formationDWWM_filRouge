<?php

session_start();

include_once("..//presentation/userPresentation.php");
include_once('../service/ServiceException.php');  
include_once('../service/UserConnectService.php');  

/* IF ACTION -----------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------*/
if (isset($_GET['action']) && !empty($_GET['action']))
{    
    echo "test 1 action OK --- ";
    /* ****************************************** INSCRIPTION - Affichage formulaire inscription */
    if ($_GET['action']=="afficherInscription")   
    {
        echo "test 2 action afficherinscription --- ";
        try {
            /**_ INSCRIPTION - Affichage ________________**/
            echo "test 3 affichage page inscription OK --- ";
            htmlUser();
            inscription();
        } 
        catch (ServiceException $se) {
            /**_ INSCRIPTION - Affichage erreur  _______**/
            echo "test 4 affichager page inscription KO --- ";
            htmlUser();
            inscription(23002);
        } 
    }
    /* ****************************************** INSCRIPTION - Formulaire ?action=inscription */
    elseif ($_GET['action']=="inscription")   
    { 
        echo "test 5 action inscription OK --- ";
        /* :::::::::::::: INSCRIPTION - Name bouton "inscrire" ::::::::::::::*/
        if (isset($_POST["inscrire"]) && isset($_POST["email"] ))
        {
            echo "test 6 name inscrire OK --- ";
            try {
            /**_ INSCRIPTION - Verification email _________**/
            $user = new User;
            $user->setPseudo($_POST['pseudo'])
                ->setEmail($_POST['email'])
                ->setNom($_POST['nom'])
                ->setPrenom($_POST['prenom'])
                ->setPhoto($_POST['photo'])
                ->setMdp($_POST['password']);

            //UserConnectService::UserVerifEmailAndHash($user,($_POST['email']));
            //var_dump(UserConnectService::UserVerifEmailAndHash($user,($_POST['email'])));die;
            if (UserConnectService::UserVerifEmailAndHash($user,($_POST['email'])))
                {
                    /**_ INSCRIPTION - if email not exist et hash ______**/
                    echo "test 7 affichage connexion Verification email et hash OK --- ";
                    include_once('../controller/controleurMain.php');
                    // "Vous etes inscrit"
                }
                else 
                {
                /**_ INSCRIPTION - If email exist ______**/
                  echo "test 8 affichage page connexion et verification email et hash KO --- ";
                  htmlUser();
                  inscription(1062); 
                }  
            } 
            catch (ServiceException $se){
                /**_ INSCRIPTION - Affichage erreur  _______**/
                echo "test 9 affichager page inscription KO --- ";
                htmlUser();
                inscription($se->getMessage(), $se->getCode());
            } 
        } 
    }

    /* ****************************************** CONNEXION - Affichage formulaire inscription */
    if ($_GET['action'] == "connexion" )
    {
        echo "test 10 action connexion OK --- ";
        try {
            /**_ CONNEXION - Affichage ___________________**/
            echo "test 11 affichage page connexion affiche OK --- ";
            htmlUser();
            connection();
        } 
        catch (ServiceException $se) {
            /**_ CONNEXION - Affichage erreur ____________**/
            echo "test 12 affichage page connexion affiche KO --- ";
            htmlUser();
            connection(23003);
        }  
    }
    elseif (($_GET['action'] == "connect"))
    {
        echo "test 13 action connect OK --- ";
    /* :::::::::::::: CONNEXION - Name bouton "connecter" ::::::::::::::*/
        if (isset($_POST['connecter']) && isset($_POST['email'] ))
        {
            try {
                /**_ CONNEXION - Verification email ______**/
                echo "test 14 name connecter OK --- ";
                $user = new User;
                $user->setEmail($_POST['email'])
                    ->setMdp($_POST['password']);

                if (UserConnectService::userConnect($_POST['email']))
                {
                    /**_ CONNEXION - If email exist ______**/
                    echo "test 15 user exist --- ";
                    include_once('../controller/controleurMain.php');
                    // htmlUser();
                    // connection(24002); "Vous etes connecté"
                }
                else 
                {
                    /**_ CONNEXION - If email not-exist ___**/ 
                    echo "test 16 user not exist --- ";
                    htmlUser();
                    inscription(23004);
                }  
            }
            catch (ServiceException $se) {
                /**_ CONNEXION - erreur verification ______**/
                echo "test 17 verification KO --- ";
                htmlUser();
                inscription($se->getMessage(), $se->getCode());
            }  
        }
    } 
}


 /* ****************************************** CONNEXION - Affichage formulaire modification */
if($_GET["action"]=="modif" && isset($_SESSION['email']) ) 
{
    echo "test 18 page modif ok";
    $user = new User;
    $user->setPseudo($_POST['pseudo'])
        ->setEmail($_POST['email'])
        ->setNom($_POST['nom'])
        ->setPrenom($_POST['prenom'])
        ->setPhoto($_POST['photo'])
        ->setMdp($_POST['password']);

    $userEdit = UserConnectService::researchUserByEmail($user);   
    var_dump($userEdit);
    
    htmlUser();
    modification($userEdit);
    // "Votre modification a bien été pris en compte"
    }
    if($_GET["action"]=="modifierOK") 
    {        
        echo "test 19 modif ok";
       $user = new User;
       $user->setPseudo($_POST['pseudo'])
           ->setEmail($_POST['email'])
           ->setNom($_POST['nom'])
           ->setPrenom($_POST['prenom'])
           ->setPhoto($_POST['photo'])
           ->setMdp($_POST['password']);

        UserConnectService::editUser($user); 
}

 /* ****************************************** DECONNEXION - Affichage formulaire deconnexion */
if ($_GET['action'] == "deconnexion" )
    {
        try {
            echo "test 20 Deconnexion OK";
            session_destroy();
            include_once('../controller/controleurMain.php');
            // "Vous êtes deconnecté"
        } 
        catch (ServiceException $se) {
            echo "test 21 Deconnexion KO";
            session_destroy();
            include_once('../controller/controleurMain.php');
        } 
    }  

// /* IF NOT ACTION --------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------*/    
// else   
// {
//     try {
//         /**_ NO ACTION - erreur ___________________________**/
//         echo "test 18 action KO --- ";
//         htmlUser();
//         inscription();
//     } 
//     catch (ServiceException $se) {
//         /**_ NO ACTION - erreur ____________________________**/
//         echo "test 19 action KO --- ";
//         htmlUser();
//         inscription(23001);
//     } 
// } 

// ?>