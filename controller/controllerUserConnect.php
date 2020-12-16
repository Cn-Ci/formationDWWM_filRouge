<?php


//session_start();

include_once("..//presentation/userPresentation.php");
include_once('../service/ServiceException.php');  
include_once('../service/UserConnectService.php');  

if (isset($_GET['action']) && !empty($_GET['action']))
{    
    echo "test 1";
    if ($_GET['action']=="afficherInscription")   
    {
        try {
            echo "test 2";
            htmlUser();
            inscription();
        } 
        catch (ServiceException $se) {
            echo "test 3";
            htmlUser();
            inscription(10000);
        } 
    } 
    if ($_GET['action']=="inscription")   
    { 

        if (isset($_POST["inscrire"]) &&
        isset($_POST["email"] ))
        {
            echo "test 5.0";
           
            try {
            echo "test 5.1";
            $user = new User;
            $user->setPseudo($_POST['pseudo'])
                ->setEmail($_POST['email'])
                ->setNom($_POST['nom'])
                ->setPrenom($_POST['prenom'])
                ->setPhoto($_POST['photo'])
                ->setMdp($_POST['password']);

            UserConnectService::UserVerif($user,($_POST['email']));
            echo "test 5.2";
            htmlUser();
            connection();
            }
            catch (ServiceException $se){
            echo "test 6";
            htmlUser();
            inscription($se->getMessage(), $se->getCode());
            }   
        }
    }   
    elseif ($_GET['action'] == "connexion" )
    {
        try {
            echo "test 7";
            htmlUser();
            connection();
        } 
        catch (ServiceException $se) {
            echo "test 8";
            htmlUser();
            connection();
        }  
    }
    elseif (($_GET['action'] == "connect"))
    {
        echo "test 9";
        if (isset($_POST['connecter']) &&
        isset($_POST['email'] ))
        {
            try {
                echo "test 10";
                $user = new User;
                $user->setEmail($_POST['email'])
                    ->setMdp($_POST['password']);
                       // var_dump($_POST, $user, $_POST['email'], $_POST['password'], $_GET['email']);
                    UserConnectService::userConnect($_POST['email']);

                if (UserConnectService::userConnect($user))
                {
                    echo "test 10";
                    htmlUser();
                    inscription();
                }
                else 
                {
                    echo "test 11";
                    include_once('../navbar.php');
                }  
            }
            catch (ServiceException $se) {
                echo "test 12";
                htmlUser();
                inscription();
            }  
        }
    }     
}
else   
{
    try {
        echo "test 13";
        htmlUser();
        inscription();
    } 
    catch (ServiceException $se) {
        echo "test 14";
        htmlUser();
        inscription();
    } 
} 

?>