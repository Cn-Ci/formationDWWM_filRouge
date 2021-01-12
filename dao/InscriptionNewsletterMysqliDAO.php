<?php
include_once('../class/Newsletter.php');
include_once('ConnectionMysqliDao.php');
require_once('../Exception/PDOException.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

error_reporting(E_ALL);
ini_set("display_errors", 1);

class InscriptionNewsletterMysqliDAO extends ConnectionMysqliDao {

    public function addEmailNewsletter(Newsletter $newsletter)
    {   
        try {
            $newConnect = new ConnectionMysqliDAO();
            $db = $newConnect->connect(); 


            $email = $newsletter->getEmail();

            $query = "INSERT INTO newsletter VALUES (:email)";           
            $stmt = $db->prepare($query); 
         
            $stmt->bindParam(':email', $email);

            $rs = $stmt->execute();

            return $rs;
            
            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }
}