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
            echo "AddUser test 100 OK --- ";
            $userConnect = new UserConnectMysqliDAO;
            $userConnect->addUser($user);
        } 
        catch (UserException $de) {
            echo "AddUser test 101 KO --- ";
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 

    function researchUserByEmail(User $user) 
    {
        try { 
            echo "ResearchUserByEmail test 102 OK --- ";
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByEmail($user);
            return $data;
        } 
        catch (UserException $de) {
            echo "ResearchUserByEmail test 103 KO --- ";
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function UserVerifEmailAndHash(User $user, $email)
    {  
        try { 
            echo "UserVerifEmailAndHash test 104 OK --- ";
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByEmail($email);
            if ($data)
            {
                echo "UserVerifEmailAndHash test 105 if data (email exist) OK --- ";
                //header('location: controllerUserConnect.php?action=afficherInscription');
                return false;
            }
            else
            { 
                echo "UserVerifEmailAndHash test 106 if no data (email not exist) OK --- ";
                $mdp = password_hash($user->getMdp(), PASSWORD_DEFAULT);
                $user->setMdp($mdp);

                $userAdd = new UserConnectMysqliDAO();
                $userAdd->addUser($user);
                return true;
            }
        } 
        catch (UserException $de) {
            echo "UserVerifEmailAndHash test 107 KO --- ";
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    }

    static function userConnect($user)
    {
        try { 
            echo "UserConnect test 108 OK --- ";
            $userConnect = new UserConnectMysqliDAO;
            $data = $userConnect->researchUserByEmail($user);  var_dump($data);
        if ($data) 
        {     
            echo "UserConnect test 109 if data (email exist) OK --- ";
            $password = $_POST['password'];
            //var_dump($data['mdp']);die;
            if (password_verify($password,$data['mdp']))
            {
                echo "UserConnect  test 110 if password/hash (mdp OK with bdd) OK --- ";
                $_SESSION = $data;
                //var_dump($_SESSION = $data);
                //var_dump($_SESSION = $data['email']);
                return true;
            }
            else 
            {
                echo "UserConnect test 111 if password/hash (mdp KO with bdd) KO --- ";
                //header('location: controllerUserConnect.php?erreur=mdpKO');
            }
        }
        else
            return false;
            echo "UserConnect test 112 if not data (email exist) OK --- ";
            //header('location: controllerUserConnect.php?erreur=notexist'); 
        } 
        catch (UserException $de) {
            echo "UserConnect test 113 KO --- ";
            throw new ServiceException($de->getMessage(), $de->getCode());
        }    
    }

    static function editUser(User $user) 
    {
        try { 
            echo "EditUser test 114 OK --- ";
            //var_dump($user);
            
            $userEdit = new UserConnectMysqliDAO;
            $data = $userEdit->editUser($user); 
            //var_dump($user);
        } 
        catch (UserException $de) {
            echo "EditUser test 115 KO --- ";
            throw new ServiceException($de->getMessage(), $de->getCode());
        }  
    } 
    
}