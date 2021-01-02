<?php
//session_start();

include_once("..//presentation/userPresentation.php");
include_once('../service/ServiceException.php');  
include_once('../service/UserConnectService.php');  

htmlUser();
modification($userEdit);



 /************************************** Modifier */
 if($_GET["action"]=="modif" && isset($_POST['email']) ) 
 {
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
     }
     if($_GET["action"]=="modifierOK") 
     {        
        $user = new User;
        $user->setPseudo($_POST['pseudo'])
            ->setEmail($_POST['email'])
            ->setNom($_POST['nom'])
            ->setPrenom($_POST['prenom'])
            ->setPhoto($_POST['photo'])
            ->setMdp($_POST['password']);

         UserConnectService::editUser($user); 
 }