<link 
        rel="stylesheet" 
        type="text/css" 
        href="../mainStyle.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../addTopic.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../destinations.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../forumStyle.css">
    <link 
        rel="stylesheet" 
        href="../css/connexionStyle.css">
    <link 
        rel="stylesheet" 
        href="../css/inscriptionStyle.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="../viewPost.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="styleOrga.css">
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="timeline.css">

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


 if (isset($_SESSION['id'])){
				
    <<<<<<< HEAD
    <<<<<<< HEAD
                    $email = $_SESSION['email']; var_dump($email);
    =======
                    
    >>>>>>> daf048d... le bug
                    ?><a href ='#' class="col-sm-12 col-md-12 col-lg alink">MON COMPTE</a>
    =======
                    $email = $_SESSION['email']; 
    
                    
                    ?>
        
    
                    
                        <a class="col-sm-12 col-md-12 col-lg alink ml-auto nav-link dropdown-toggle" data-toggle="dropdown" id="accountDropdownLink" aria-expanded="false">
                            MON COMPTE <?php echo $_SESSION['email'] ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-rigth" aria-labelledby="accountDropdownLink">
                            <li><a href="../controller/controllerUserConnect.php?action=modif&amp;email=<?php echo $_SESSION['email'] ?>" class="dropdown-item" >Modifier mon profil</a></li>
                            <li><a href='../controller/controllerUserConnect.php?action=deconnexion' class="dropdown-item" >Deconnexion</a></li>
    
                        </div>
                    
    >>>>>>> f01c32f (modif nav)
                    
                    <?php	
            } else {
                    ?>
                    <a type='button' class='col-sm-12 col-md-12 col-lg alink' href='../controller/controllerUserConnect.php?action=afficherInscription'>S'INSCRIRE</a>
                    <a type='button' class='col-sm-12 col-md-12 col-lg alink' href='../controller/controllerUserConnect.php?action=connexion'>SE CONNECTER</a>
                    <?php
                }
            ?>
        </nav>
    </div>
    
    <style>
    ::marker {
       display: none;
    }
        #navBar{
            z-index           : 999;
            text-align        : center;
            position          : fixed;
            -webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.5);
            -moz-box-shadow   : 0px 4px 5px 0px rgba(0,0,0,0.5);
            box-shadow        : 0px 4px 5px 0px rgba(0,0,0,0.5);
            opacity           : 0.9;
            height            : 100px;
            background-color  : white;
        }
        #logo{
            max-width: 100px;
            max-height: 100px;
            margin-top: 10px;
        }
        #accountDropdownLink{
            color      :#228b22;
        }
        .dropdown-menu {
            left: 600px !important;
        }