<?php 
include_once('../dao/UserConnectMysqliDAO.php');
include_once("../Exception/UserException.php");
include_once('../service/ServiceException.php');


ini_set('display_errors',1); 
error_reporting(E_ALL);

Class UserConnectService {

    static function addUser(User $user) 
    {
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $userConnect->addUser($user);
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 

    function researchUserByEmail(String $email) 
    {
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByEmail($email);
            return $data;
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function UserVerifEmailAndHash(User $user, $email)
    {  
        try { 
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByEmail($email);
            if ($data)
            {
                //header('location: controllerUserConnect.php?action=afficherInscription');
                return false;
            }
            else
            { 
                $mdp = password_hash($user->getMdp(), PASSWORD_DEFAULT);
                $user->setMdp($mdp);

                $userAdd = new UserConnectMysqliDAO();
                $userAdd->addUser($user);
                return true;
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
            $data = $userConnect->researchUserByEmail($user); 
        if ($data) 
        {     
            $password = $_POST['password'];
            
            if (password_verify($password,$data->getMdp()))
            {
                $_SESSION['id'] = $data->getId();
                $_SESSION['pseudo'] = $data->getPseudo();
                $_SESSION['prenom'] = $data->getPrenom();
                $_SESSION['nom'] = $data->getNom();
                $_SESSION['email'] = $data->getEmail();
                $_SESSION['profil'] = $data->getProfil();
                header('location: ../controller/controleurMain.php');
                return true;
            }
            else 
            {
                //header('location: controllerUserConnect.php?erreur=mdpKO');
            }
        }
        else
            return false;
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }

    static function editUser(User $user) 
    {
        try { 
            $userEdit = new UserConnectMysqliDAO;
            $data = $userEdit->editUser($user); 
            
        } 
        catch (UserException $de) {
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 
    
}