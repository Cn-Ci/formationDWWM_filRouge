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
    echo "test 1 action OK --- ";
    /* ****************************************** INSCRIPTION - Affichage formulaire inscription */
    if ($_GET['action']=="afficherInscription")   
    {
        echo "test 2 action afficherinscription --- ";
        try {
            /**_ INSCRIPTION - Affichage ________________**/
            echo "test 3 affichage page inscription OK --- ";
            inscription();
        } 
        catch (ServiceException $se) {
            /**_ INSCRIPTION - Affichage erreur  _______**/
            echo "test 4 affichager page inscription KO --- ";
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
    
                  inscription(1062); 
                }  
            } 
            catch (ServiceException $se){
                /**_ INSCRIPTION - Affichage erreur  _______**/
                echo "test 9 affichager page inscription KO --- ";

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
            connection();
        } 
        catch (ServiceException $se) {
            /**_ CONNEXION - Affichage erreur ____________**/
            echo "test 12 affichage page connexion affiche KO --- ";
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
                
                    // connection(24002); "Vous etes connecté"
                }
                else 
                {
                    /**_ CONNEXION - If email not-exist ___**/ 
                    echo "test 16 user not exist --- ";
    
                    inscription(23004);
                }  
            }
            catch (ServiceException $se) {
                /**_ CONNEXION - erreur verification ______**/
                echo "test 17 verification KO --- ";

                inscription($se->getMessage(), $se->getCode());
            }  
        }
    } 

 /* ****************************************** CONNEXION - Affichage formulaire modification */
    if($_GET["action"]=="modif" && isset($_SESSION['email']) ) 
    {
        echo "test 18 page modif ok ";
        $user = new User;
        $user->setPseudo($_SESSION['pseudo'])
            ->setEmail($_SESSION['email'])
            ->setNom($_SESSION['nom'])
            ->setPrenom($_SESSION['prenom'])
            ->setPhoto($_SESSION['photo'])
            ->setMdp($_SESSION['mdp']);

            /**_ CONNEXION - If email not-exist ___**/ 
            echo "test 20 user not exist --- Pret pour modification";
            modification($user);
        
    }
    elseif($_GET["action"]=="modifierOK") 
    {        
        echo "test 21 modif ok ";
        
        $user = new User;
        $user->setPseudo($_POST['pseudo'])
            ->setEmail($_POST['email'])
            ->setNom($_POST['nom'])
            ->setPrenom($_POST['prenom'])
            ->setPhoto($_POST['photo']);

            $userEdit = new UserConnectService;
            $data = $userEdit->editUser($user); 
            
        include_once('../controller/controleurMain.php');

        //connection(24002); "Vous etes connecté"
        // "Votre modification a bien été enregistrée !"
        //UserConnectService::editUser($user); 
        //var_dump(UserConnectService::editUser($user));
    }

    /* ****************************************** DECONNEXION - Affichage formulaire deconnexion */
    if ($_GET['action'] == "deconnexion" )
        {
            try {
                echo "test 22 Deconnexion OK";
                session_start();
                session_destroy();
                include_once('../controller/controleurMain.php');
                // "Vous êtes deconnecté"
            } 
            catch (ServiceException $se) {
                echo "test 23 Deconnexion KO";
                session_destroy();
                include_once('../controller/controleurMain.php');
            } 
    } 

    /* ****************************************** NEWSLETTER - Formulaire ?action=newsletter */
    if ($_GET['action']=="newsletter")   
    { 
        echo "test 24 action inscription newsletter OK --- ";
        /* :::::::::::::: NEWSLETTER - Name bouton "inscrire" ::::::::::::::*/
        if (isset($_POST["envoyer"]) && isset($_POST["email"] ))
        {
            echo "test 25 name inscrire OK --- ";
            try 
            {
                /**_ NEWSLETTER - Verification email _________**/
                $newsletter = new Newsletter;
                $newsletter->setEmail($_POST['email']);

                //UserConnectService::UserVerifEmailAndHash($user,($_POST['email']));
                //var_dump(UserConnectService::UserVerifEmailAndHash($user,($_POST['email'])));die;

                if (NewsletterService::addEmailNewsletter($newsletter))
                {
                    /**_ NEWSLETTER - if email not exist et hash ______**/
                    echo "test 26 affichage connexion Verification email et hash OK --- ";
                    include_once('../controller/controleurMain.php');
                    // "Vous etes inscrit"
                }
                else 
                {
                /**_ NEWSLETTER - If email exist ______**/
                    echo "test 27 affichage page connexion et verification email et hash KO --- ";
                    include_once('../controller/controleurMain.php');
                }  
            } 
            catch (ServiceException $se){
                /**_ NEWSLETTER - Affichage erreur  _______**/
                echo "test 28 affichager page inscription KO --- ";

                inscription($se->getMessage(), $se->getCode());
            } 
        } 
    }
} 

// ?>