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
            //var_dump($data, $user);
        if ($data) 
        {     
            //var_dump($data, $user, $_POST, $_POST['password']);
            //var_dump($password,$data['password']);
            $password = $_POST['password'];
            var_dump($data['']);die;
            //var_dump($password = $_POST['password'] . "et ici on a le date" . ['password']);die;
            if (password_verify($password,$data['password']))
            {
                //var_dump($data, $email, $_POST, $_POST['password']);die;
                $_SESSION['email'] = $data['email'];
                $_SESSION['profil'] = $data['profil'];
                return true;
            }
        }
        else
            return false;
            echo "erreur connection"
;            // header('location: controllerUserConnect.php?erreur=notexist'); 
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }
    
}