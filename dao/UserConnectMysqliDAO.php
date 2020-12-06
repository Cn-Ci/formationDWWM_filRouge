<?php

include_once(__DIR__.'/ConnectionMysqliDao.php');
include_once(__DIR__ . '/dao/interface.php');
require_once(__DIR__. '/interfaceDao.php');
require_once(__DIR__. '/PDOException.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

error_reporting(E_ALL);
ini_set("display_errors", 1);

class UserConnectMysqliDao extends ConnectionMysqliDao implements CommunDAO{


 public function addUser(User $user)
    {   
        try {
            $newConnect = new ConnexionMysqliDAO();
            $db = $newConnect->connect(); 

            $getId = $User->getId();
            $getPseudo = $User->getPseudo();
            $getEmail = $User->getEmail();
            $getPrenom = $User->getPseudo();
            $getPhoto = $User->getPhoto();
            $getMdp = $User->getMdp();
            $getProfil = $User->getProfil();

            $query = "INSERT INTO user VALUES (NULL,:pseudo,:email,:pseudo,:photo,:mdp,:profil)"; //           
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':pseudo', $getPseudo);           
            $stmt->bindParam(':email', $getEmail);
            $stmt->bindParam(':prenom', $getPrenom);
            $stmt->bindParam(':photo', $getPhoto);
            $stmt->bindParam(':mdp', $getMdp);
            $stmt->bindParam(':profil', $getProfil);

            $stmt->execute();

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }

    function researchUserByMail(User $user) 
    {
        try {
            $newConnect = new ConnexionMysqliDAO();
            $db = $newConnect->connect(); 

            $query = "SELECT * FROM user WHERE :email = ?";
            $stmt = $db->prepare($query);
            $stmt->bind_param(':email', $email);

            $stmt->execute();
            $data= $rs->fetchAll();
 
            $db = null;
            $stmt = null; 
            return $data;
        } 
        catch (mysqli_sql_exception $e) {
            throw new DaoSqlException($e->getMessage(), $e->getCode());
        }
    }
}

