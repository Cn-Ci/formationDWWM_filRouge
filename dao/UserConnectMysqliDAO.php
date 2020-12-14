<?php
include_once('../class/User.php');
include_once('ConnectionMysqliDao.php');
require_once('../Exception/PDOException.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

error_reporting(E_ALL);
ini_set("display_errors", 1);

class UserConnectMysqliDAO extends ConnectionMysqliDao {


 public function addUser(User $user)
    {   
        try {
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect(); 

            $getPseudo = $user->getPseudo();
            $getEmail = $user->getEmail();
            $getNom = $user->getNom();
            $getPrenom = $user->getPrenom();
            $getPhoto = $user->getPhoto();
            $getMdp = $user->getMdp();
            $profil = 'utilisateur';

            $query = "INSERT INTO user VALUES (NULL,:pseudo,:email,:nom,:prenom,:photo,:mdp,:profil)";           
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':pseudo', $getPseudo);           
            $stmt->bindParam(':email', $getEmail);
            $stmt->bindParam(':nom', $getNom);
            $stmt->bindParam(':prenom', $getPrenom);
            $stmt->bindParam(':photo', $getPhoto);
            $stmt->bindParam(':mdp', $getMdp);
            $stmt->bindParam(':profil', $profil);

            $stmt->execute();

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }

    public function researchUserByMail($email)
    {
        var_dump($email);
        try
        {
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect();

            $query = "SELECT * FROM user WHERE email = :email";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $utilisateur = $stmt->fetchAll(PDO::FETCH_CLASS,'User');

            return $email[0];
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

