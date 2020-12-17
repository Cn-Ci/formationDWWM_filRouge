<?php 
include_once('../dao/UserConnectMysqliDAO.php');
include_once("../Exception/UserException.php");
include_once('../service/ServiceException.php');

Class UserConnectService {

    static function addUser(User $user) 
    {
        try { 
            UserConnectMysqliDAO::addUser($user);
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 

    function researchUserByMail(User $user) 
    {
        try { 
            UtilisateurMysqliDAO::researchUserByMail($user);
            return $data;
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function UserVerif(User $user, $email)
    {  
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByMail($email);
            if ($data)
            {
                header('location: controllerUserConnect.php?action=afficherInscription');
            }
            else
            { 
                $mdp = password_hash($user->getMdp(), PASSWORD_DEFAULT);
                $user->setMdp($mdp);

                $userAdd = new UserConnectMysqliDAO();
                $userAdd->addUser($user);
            }
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function userConnect($user)
    {
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByMail($user);
          
            //$userConnect->getMdp();
            
        if ($data) 
        {     
            //var_dump($data, $user, $_POST, $_POST['password']);
            //var_dump($password,$data['password']);
            //$truc = nomdetafonction(); $truc->getMdp()
            
            $password = $_POST['password'];
            
           
            // echo '<pre>';
            // var_dump($data['mdp']);
            // echo '</pre>';
            // var_dump($data['pseudo']);die;
            
             

            if (password_verify($password,$data['mdp']))
            {
                //var_dump($data, $email, $_POST, $_POST['password']);die;

                $_SESSION['id'] = $data['id'];
                $_SESSION['pseudo'] = $data['pseudo'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['profil'] = $data['profil'];
                
                return true;
            }
        }
        else
            return false;
            echo "erreur connection"
;           header('location: controllerUserConnect.php?erreur=notexist'); 
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }
    
}