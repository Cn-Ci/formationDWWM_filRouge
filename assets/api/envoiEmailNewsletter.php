<?php 

$email = $_POST['email'];

// entete de l'email
$entete = "From: \"Mobili'T\" <laure.hamille@sfr.fr>\r\n";
$entete .= "Reply-to: \"webmaster\" <laure.hamille@sfr.fr>\r\n";
$entete .= "Organization: \"Gemini int.\"\r\n";
$entete .= "MIME-Version: 1.0\r\n";
$entete .= "X-Mailer:PHP".phpversion()."\r\n";
// corps de l'email
$msg = "Bienvenue chez Mobili'T, le site qui vous fait voyager ! Vous avez été enregistré à notre newseletter, chaque mois, vous receverez un e-mail avec nos nouvelles destinations ! ";
// envoi de l'email
if(mail($email, "Bienvenue chez Mobili'T", $msg, $entete)){
	echo "le message a été envoyé";
}else{
	echo "une erreur est survenue";
}
