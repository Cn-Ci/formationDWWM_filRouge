<?php 
include_once('../dao/UserConnectMysqliDAO.php');
include_once("DAOSqlException.php");
include_once('../service/ServiceException.php');

Class UtilService {

    static function addUser(User $user) 
    {
        try { 
            UserConnectMysqliDAO::addUser($user);
        } 
        catch (DAOSqlException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 

    function researchUserByMail(User $user) 
    {
        try { 
            UtilisateurMysqliDAO::researchUserByMail($user);
            return $data;
        } 
        catch (DAOSqlException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function UserVerif(User $user)
    {  
        try { 
            $data = UserConnectMysqliDAO::researchUserByMail($user->getEmail());
            if ($data)
            {
                header('location: controllerUserConnect.php?action=afficherInscription');
            }
            else
            {
                $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
                $user->setPassword($mdp);

                UserConnectMysqliDAO::addUser($user);
            }
        } 
        catch (DAOSqlException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function userConnect(User $user)
    {
        try { 
            $data = UserConnectMysqliDAO::researchUserByMail($user->getEmail());
        if ($data) 
        {     
            $password = $_POST['mdp'];
            if (password_verify($password,$data['mdp']))
            {
                $_SESSION['email'] = $data['email'];
                $_SESSION['profil'] = $data['profil'];
                return true;
            }
        }
        else
            return false;
            header('location: controllerUserConnect.php?erreur=notexist'); 
        } 
        catch (DAOSqlException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }
    
}