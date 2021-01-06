<?php

/* ****************************************** DECONNEXION - Affichage formulaire deconnexion */
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
                $message = "Bravo ! Vous etes inscrit a MobiliT";
    
                $destinataire = $email;
                $objet = "Inscription à la newsletter de Mobilit.fr" ;
    
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: laure.hamille@sfr.fr' . "\r\n";
                    if ( mail($destinataire, $objet, $message, $headers) ) // On envoie l'e-mail.
                    {
                    echo "<script>alert('Félicitation, vous venez de recevoir un email de bienvenue 😜')</script>";
                    }
                    else
                    {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre inscription.";
                    }
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
    else {

        "echo test";
    }
