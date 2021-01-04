<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>La newsletter de Mobili'T</title>
</head>
<body>
 <?php
    // On vérifie que la variable $_GET['email'] existe.
    if(isset($_GET['email'])) 
    {
        // On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email']  est égale à 1 et que la variable $_POST['new'] existe. 
        if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new']))
        {
            // On vérifie qu'on a bien rentré une adresse e-mail valide.
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) 
            {
                // Si la variable $_POST['new'] est égale à 0, cela signifie que l'on veut s'inscrire.
                if($_POST['new']==0) 
                {
 
                // On définit les paramètres de l'e-mail.
                $email = $_POST['email'];
                $message = 'Pour valider votre inscription à la newsletter de MonSite.fr, <a href="http://mobilit.fr/inscription.php?tru=1&amp;email='.$email.'">cliquez ici</a>.';
    
                $destinataire = $email;
                $objet = "Inscription à la newsletter de MonSite.fr" ;
    
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: laure.hamille@sfr.fr' . "\r\n";
                    if ( mail($destinataire, $objet, $message, $headers) ) // On envoie l'e-mail.
                    {
    
                    echo "Pour valider votre inscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                    }
                    else
                    {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre inscription.";
                    }
                }
                // Si la variable $_POST['new'] est égale à 1, cela signifie que l'on veut se désinscrire.
                elseif($_POST['new']==1) 
                {
 
                // On définit les paramètres de l'e-mail.
                $email = $_POST['email'];
                $message = 'Pour valider votre désinscription de la newsletter de MonSite.fr, <a href="http://www.monsite.fr/desinscription.php?tru=1&amp;email='.$email.'">cliquez ici</a>.';
    
                $destinataire = $email;
                $objet = "Désinscription de la newsletter de MonSite.fr" ;
    
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: laure.hamille@sfr.fr' . "\r\n";
                    if ( mail($destinataire, $objet, $message, $headers) ) 
                    {
    
                    echo "Pour valider votre désinscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                    }
                    else
                    {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre désinscription.";
                    }
                }
                else
                {
                echo "Il y a eu une erreur de mail !";
                }
            }
            else
            {
            echo "Vous n\'avez pas entré une adresse e-mail valide ! Veuillez recommencer !";
            }
        }
        else
        {
        echo "Il y a eu une erreur de variable.";
        }
    }
    // Si les champs n'ont pas été remplis.
    else 
    {
?>
La newsletter :

<?php
    }
?>
</body>
</html>