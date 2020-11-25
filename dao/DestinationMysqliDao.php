<?php

include_once(__DIR__.'/ConnectionMysqliDao.php');

class DestinationMysqliDao extends ConnectionMysqliDao implements communDAO{

    //CREATE
    public static function add(destination $objet){
            //connection à la base de données
            $db=parent :: connect();
            //requête SQL d'insertion
            $stmt= $db->prepare("INSERT INTO `destination` ('idDestination','region', 'lieu', 'image', 'description', 'lien', 'extraitForum') VALUES (null,?,?,?,?,?,?)");
            $stmt->bind_param('ssssssss', $region, $lieu, $image, $description, $lien, $extraitForum);
            $rs=$stmt->execute();
        
            $db->close();
            return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
    }

    
    //RESEARCH BY email
    public static function researchBy(string $idDestination){

            $db= parent :: connect();
    
            //récupère les données d'un utilisateur précisé
            $stmt=$db->prepare("SELECT * FROM destination WHERE idDestination=?");
            $stmt->bind_param('i', $idDestination);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=$rs->fetch_array(MYSQLI_ASSOC);
            $dest = new Destination();
            $dest->setIdDestination($data['idDestination'])->setRegion($data['region'])->setLieu($data['lieu'])->setImage($data['image'])->setDescription($data['description'])->setLien($data['lien'])->setExtraitForum($data['extraitForum']);
            
            $rs->free();
            $db->close();
    
            return $dest;
        
    }

    //RESEARCH ALL
    public  function research(){
        
        $db= parent :: connect();

        //récupère toute les données de la table users
        $stmt=$db->prepare("SELECT * FROM destination");
        $stmt->execute();
        $rs=$stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);

        $i=0;
        foreach($data as $key=>$value){
            $dest= new Destination();
            $dest->setIdDestination($data['idDestination'])->setRegion($data['region'])->setLieu($data['lieu'])->setImage($data['image'])->setDescription($data['description'])->setLien($data['lien'])->setExtraitForum($data['extraitForum']);
            $data[$i]=$dest;
            $i++;
        }
        
        $rs->free();
        $db->close();

        return $data;
    }

    //UPDATE
    public function update(destination $objet){

        $idDestination= $objet->getIdDestination();
        $lieu=$objet->getLieu();
        $image=$objet->getImage();
        $description=$objet->getDescription();
        $lien=$objet->getLien();
        $extraitForum=$objet->getExtraitForum();
        
        $db=parent :: connect();
        
        // mise à jour des données
        $stmt=$db->prepare("UPDATE destination SET lieu=?, image=?, description=?, lien=?, extraitForum=? WHERE idDestination=?");
        $stmt->bind_param('sssssi',$lieu, $image, $description, $lien, $extraitForum, $idDestination);
        $rs=$stmt->execute();

        $db->close();
                    
        return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
    }

    //DELETE
    public  function delete($id){

        $db=parent :: connect();
        
        // on supprime les données
        $stmt=$db->prepare("DELETE FROM destination WHERE idDestination=?");
        $stmt->bind_param('i', $idDestination);
        $stmt->execute();
        $rs=$stmt->get_result();
                
        $db->close();
        return $rs;  /** le résultat est retourné pour pouvoir afficher le message de suppression */
    }
}