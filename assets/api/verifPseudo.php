<?php 

$pseudo = htmlentities($_GET['pseudo']);

require_once '../../dao/ConnectionMysqliDao.php';

try {
    $newConnect = new ConnectionMysqliDAO();
    $db = $newConnect->connect(); 

    $query = "SELECT * FROM user WHERE pseudo = :pseudo";           
    $stmt = $db->prepare($query); 
         
    $stmt->bindParam(':pseudo', $pseudo);


    $stmt->execute();
    $rs = $stmt->rowCount();
    

    $db = null;
    $stmt = null;   
    echo $rs;        
} 
catch (PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}    
