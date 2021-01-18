<?php 

$email = htmlentities($_GET['email']);

require_once '../../dao/ConnectionMysqliDao.php';

try {
    $newConnect = new ConnectionMysqliDAO();
    $db = $newConnect->connect(); 

    $query = "SELECT * FROM user WHERE email = :email";           
    $stmt = $db->prepare($query); 
         
    $stmt->bindParam(':email', $email);


    $stmt->execute();
    $rs = $stmt->rowCount();
    

    $db = null;
    $stmt = null;   
    echo $rs;        
} 
catch (PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}    
