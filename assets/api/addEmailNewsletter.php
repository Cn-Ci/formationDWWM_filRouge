<?php 
require_once '../../dao/ConnectionMysqliDao.php';

$email = htmlentities($_POST['email']);
//echo json_encode($email);
try {
    $newConnect = new ConnectionMysqliDAO();
    $db = $newConnect->connect(); 

    $query = "INSERT INTO newsletter VALUES (:email)";           
    $stmt = $db->prepare($query); 
    
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $rs = $stmt->rowCount();

        $entete = "From: \"Mobili'T\" <laure.hamille@sfr.fr>\r\n";
        $entete .= "Reply-to: \"webmaster\" <laure.hamille@sfr.fr>\r\n";
        $entete .= "Organization: \"Gemini int.\"\r\n";
        $entete .= "MIME-Version: 1.0\r\n";
        $entete .= "X-Mailer:PHP".phpversion()."\r\n";
        // corps de l'email
        $msg = "Bienvenue chez Mobili'T, le site qui vous fait voyager ! Vous avez été enregistré à notre newseletter, chaque mois, vous receverez un e-mail avec nos nouvelles destinations ! ";
        // envoi de l'email
        mail($email, "Bienvenue chez Mobili'T", $msg, $entete); 

    $db = null;
    $stmt = null;   
    echo $rs; 
} 
catch (PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}   