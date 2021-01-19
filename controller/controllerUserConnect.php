<?php
session_start();

include_once("..//presentation/userPresentation.php");
include_once('../service/ServiceException.php');  
include_once('../service/UserConnectService.php');  
include_once('../service/NewsletterService.php');  

/* IF ACTION -----------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------*/
if (isset($_GET['action']) && !empty($_GET['action']))
{    
    /* ****************************************** INSCRIPTION - Affichage formulaire inscription */
    if ($_GET['action']=="afficherInscription")   
    {
        try {
            /**_ INSCRIPTION - Affichage ________________**/
            inscription();
        } 
        catch (ServiceException $se) {
            /**_ INSCRIPTION - Affichage erreur  _______**/
            inscription(23002);
        } 
    }
    /* ****************************************** INSCRIPTION - Formulaire ?action=inscription */
    elseif ($_GET['action']=="inscription")   
    { 
        /* :::::::::::::: INSCRIPTION - Name bouton "inscrire" ::::::::::::::*/
        if (isset($_POST["inscrire"]) && isset($_POST["email"] ))
        {
            try {
            /**_ INSCRIPTION - Verification email _________**/
            $user = new User;
            $user->setPseudo(htmlentities($_POST['pseudo']))
                ->setEmail(htmlentities($_POST['email']))
                ->setNom(htmlentities($_POST['nom']))
                ->setPrenom(htmlentities($_POST['prenom']))
                ->setPhoto(htmlentities($_POST['photo']))
                ->setMdp(htmlentities($_POST['password']));

            //UserConnectService::UserVerifEmailAndHash($user,($_POST['email']));
            //var_dump(UserConnectService::UserVerifEmailAndHash($user,($_POST['email'])));die;
            if (UserConnectService::UserVerifEmailAndHash($user,($_POST['email'])))
                {
                    /**_ INSCRIPTION - if email not exist et hash ______**/
                    include_once('../controller/controleurMain.php');
                    // "Vous etes inscrit"
                }
                else 
                {
                /**_ INSCRIPTION - If email exist ______**/
                  inscription(1062); 
                }  
            } 
            catch (ServiceException $se){
                /**_ INSCRIPTION - Affichage erreur  _______**/
                inscription($se->getMessage(), $se->getCode());
            } 
        } 
    }

    /* ****************************************** CONNEXION - Affichage formulaire inscription */
    if ($_GET['action'] == "connexion" )
    {
        try {
            /**_ CONNEXION - Affichage ___________________**/
            connection();
        } 
        catch (ServiceException $se) {
            /**_ CONNEXION - Affichage erreur ____________**/
            connection(23003);
        }  
    }
    elseif (($_GET['action'] == "connect"))
    {
    /* :::::::::::::: CONNEXION - Name bouton "connecter" ::::::::::::::*/
        if (isset($_POST['connecter']) && isset($_POST['email'] ))
        {
            try {
                /**_ CONNEXION - Verification email ______**/
                $user = new User;
                $user->setEmail(htmlentities($_POST['email']))
                    ->setMdp(htmlentities($_POST['password']));

                if (UserConnectService::userConnect($_POST['email']))
                {
                    /**_ CONNEXION - If email exist ______**/
                    include_once('../controller/controleurMain.php');
                    // connection(24002); "Vous etes connecté"
                }
                else 
                {
                    /**_ CONNEXION - If email not-exist ___**/ 
                     connexion(23004);
                }  
            }
            catch (ServiceException $se) {
                /**_ CONNEXION - erreur verification ______**/
                inscription($se->getMessage(), $se->getCode());
            }  
        }
    } 

 /* ****************************************** CONNEXION - Affichage formulaire modification */
    if($_GET["action"]=="modif" && isset($_SESSION['email']) ) 
    {
        $user = new User;
        $user->setPseudo(htmlentities($_SESSION['pseudo']))
            ->setEmail(htmlentities($_SESSION['email']))
            ->setNom(htmlentities($_SESSION['nom']))
            ->setPrenom(htmlentities($_SESSION['prenom']))
            ->setPhoto(htmlentities($_SESSION['photo']))
            ->setMdp(htmlentities($_SESSION['mdp']));

            /**_ CONNEXION - If email not-exist ___**/ 
            modification($user);
        
    }
    elseif($_GET["action"]=="modifierOK") 
    {        
        $user = new User;
        $user->setPseudo(htmlentities($_POST['pseudo']))
            ->setEmail(htmlentities($_POST['email']))
            ->setNom(htmlentities($_POST['nom']))
            ->setPrenom(htmlentities($_POST['prenom']))
            ->setPhoto(htmlentities($_POST['photo']));

            $userEdit = new UserConnectService;
            $data = $userEdit->editUser($user); 
            
        include_once('../controller/controleurMain.php');
        // "Votre modification a bien été enregistrée !"
    }

    /* ****************************************** DECONNEXION - Affichage formulaire deconnexion */
    if ($_GET['action'] == "deconnexion" )
        {
            try {
                session_destroy();
                include_once('../controller/controleurMain.php');
                // "Vous êtes deconnecté"
            } 
            catch (ServiceException $se) {
                session_destroy();
                include_once('../controller/controleurMain.php');
            } 
    } 

    /* ****************************************** NEWSLETTER - Formulaire ?action=newsletter */
    // if ($_GET['action']=="newsletter")   
    // { 
    //     /* :::::::::::::: NEWSLETTER - Name bouton "inscrire" ::::::::::::::*/
    //     if (isset($_POST["envoyer"]) && isset($_POST["email"] ))
    //     {
    //         try 
    //         {
    //             /**_ NEWSLETTER - Verification email _________**/
    //             $newsletter = new Newsletter;
    //             $newsletter->setEmail($_POST['email']);
    //             if (NewsletterService::addEmailNewsletter($newsletter))
    //             {
    //                 /**_ NEWSLETTER - if email not exist et hash ______**/
    //                 include_once('../controller/controleurMain.php');
    //                 // "Vous etes inscrit"
    //             }
    //             else 
    //             {
    //             /**_ NEWSLETTER - If email exist ______**/
    //                 include_once('../controller/controleurMain.php');
    //             }  
    //         } 
    //         catch (ServiceException $se){
    //             /**_ NEWSLETTER - Affichage erreur  _______**/
    //             inscription($se->getMessage(), $se->getCode());
    //         } 
    //     } 
    // }
} 

?>