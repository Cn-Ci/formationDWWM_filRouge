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

                UserConnectMysqliDAO::addUser($user);
            }
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function userConnect($email)
    {
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByMail($email);
        if ($data) 
        {     
            $password = $_POST['password'];
            if (password_verify($password,$data['password']))
            {
                $_SESSION['username'] = $data['username'];
                $_SESSION['profil'] = $data['profil'];
                return true;
            }
        }
        else
            return false;
            header('location: controllerUserConnect.php?erreur=notexist'); 
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }
    
}