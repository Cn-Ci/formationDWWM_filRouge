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

    public function researchUserByEmail($email)
    {
        try
        {
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect();

            $query = "SELECT * FROM user WHERE email = :email LIMIT 1";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $userEmail = $stmt->fetch();

            return $userEmail;
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function editUser(object $user) 
    {
        try
        {
            $pseudo = $user->getPseudo();
            $email= $user->getEmail();
            $nom= $user->getNom();
            $prenom = $user->getPrenom();
            $photo = $user->getPhoto();
    
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect();
            
            $stmt = $db->prepare( "UPDATE user SET pseudo = :pseudo , email= :email , nom= :nom, photo = :photo where email = :email");

            $stmt->bindParam(':pseudo', $pseudo);           
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':photo', $photo);

            $stmt->execute();
            
            $db = null;
            $stmt = null; 
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    static public function researchUserById(Int $id) {
        try {
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect();

            $query = "SELECT * FROM user WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $userId = $stmt->fetch(MYSQLI_ASSOC);

            return $userId;
            
        } catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

