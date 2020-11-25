<?php

include_once(__DIR__.'/ConnectionMysqliDao.php');
include_once(__DIR__ . '/dao/interface.php');


class UserMysqliDao extends ConnectionMysqliDao implements CommunDAO{

    //CREATE
    public static function add(string $pseudo,string $email,string $nom,string $prenom, $photo,string $mdp,string $profil){
            //connection à la base de données
            $db=parent :: connect();
            //requête SQL d'insertion
            $stmt= $db->prepare("INSERT INTO `uses` ('id',pseudo', 'email', 'nom', 'prenom', 'photo', 'mdp', 'profil', `mdp`, `profil`) VALUES (null,?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssss', $pseudo, $email, $nom, $prenom, $photo, $mdp, $profil);
            $rs=$stmt->execute();
        
            $db->close();
            return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
    }

    
    //RESEARCH BY email
    public static function researchBy(string $email){

            $db= parent :: connect();
    
            //récupère les données d'un utilisateur précisé
            $stmt=$db->prepare("SELECT * FROM user WHERE email=?");
            $stmt->bind_param('i', $email);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=$rs->fetch_array(MYSQLI_ASSOC);
            $user = new User();
            $user->setId($data['id'])->setPseudo($data['pseudo'])->setEmail($data['email'])->setNom($data['nom'])->setPrenom($data['prenom'])->setPhoto($data['photo'])->setMdp($data['mdp'])->setProfil($date['profil']);
            
            $rs->free();
            $db->close();
    
            return $emp;
        
    }

    //RESEARCH ALL
    public  function research(){
        
        $db= parent :: connect();

        //récupère toute les données de la table user
        $stmt=$db->prepare("SELECT * FROM user");
        $stmt->execute();
        $rs=$stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);

        $i=0;
        foreach($data as $key=>$value){
            $user= new User();
            $user->setId($value['id'])->setPseudo($value['pseudo'])->setEmail($value['email'])->setNom($value['nom'])->setPrenom($value['prenom'])->setPhoto($value['photo'])->setMdp($value['mdp'])->setProfil($value['profil']);
            $data[$i]=$user;
            $i++;
        }
        
        $rs->free();
        $db->close();

        return $data;
    }

    //UPDATE
    public function update(user $objet){

        $id= $objet->getId();
        $pseudo=$objet->getPseudo();
        $email=$objet->getEmail();
        $nom=$objet->getNom();
        $prenom=$objet->getPrenom();
        $photo=$objet->getPhoto();
        $mdp=$objet->getMdp();
        $profil=$objet->getProfil();
        
        $db=parent :: connect();
        
        // mise à jour des données
        $stmt=$db->prepare("UPDATE user SET pseudo=?, email=?, nom=?, prenom=?, photo=?, mdp=?, profil=? WHERE id=?");
        $stmt->bind_param('sssssssi',$pseudo,$email, $nom, $prenom, $photo, $mdp, $profil, $id);
        $rs=$stmt->execute();

        $db->close();
                    
        return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
    }

    //DELETE
    public  function delete($id){

        $db=parent :: connect();
        
        // on supprime les données
        $stmt=$db->prepare("DELETE FROM user WHERE id=?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $rs=$stmt->get_result();
                
        $db->close();
        return $rs;  /** le résultat est retourné pour pouvoir afficher le message de suppression */
    }

    public static function verif($mdp, $hash){
        
        if (password_verify($mdp, $hash)) {
            echo 'Le mot de passe est valide ! ';
        } else {
            echo 'Le mot de passe est invalide.';
        }
    
        }
}