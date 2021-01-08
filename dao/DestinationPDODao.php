<?php


require_once(__DIR__.'/../class/Destination.php');
require_once(__DIR__.'/DaoSqlException.php');
require_once(__DIR__.'/ConnectionMysqliDao.php');
require_once(__DIR__.'/interfaceDao.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class DestinationPDODao extends ConnectionMysqliDao implements interfaceDAO{

    //CREATE
    public function add(object $destination){

        $region= $destination->getRegion();
        $lieu= $destination->getLieu();
        $image= $destination->getImage();
        $petiteDescription= $destination->getPetiteDescription();
        $description= $destination->getDescription();
        $atout1= $destination->getAtout1();
        $atout2= $destination->getAtout2();
        $atout3= $destination->getAtout3();
        $lien= $destination->getLien();
        $extratiForum= $destination->getExtraitForum();
        $idUser= $destination->getIdUser();

            try{$db=ConnectionMysqliDao::connect(); //connection à la base de données
                $stmt= $db->prepare("INSERT INTO `destination`  VALUES (NULL,:region, :lieu, :image, :petiteDescription,:description, :atout1, :atout2, :atout3,:lien, :extraitForum, :idUser)"); //requête SQL d'insertion
                $stmt->bindParam(':region', $region);
                $stmt->bindParam(':lieu', $lieu);
                $stmt->bindParam(':image', $image);
                $stmt->bindParam(':petiteDescription', $petiteDescription);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':atout1', $atout1);
                $stmt->bindParam(':atout2', $atout2);
                $stmt->bindParam(':atout3', $atout3);
                $stmt->bindParam(':lien', $lien);
                $stmt->bindParam(':extraitForum', $extraitForum);
                $stmt->bindParam(':idUser', $idUser);
                $rs=$stmt->execute();
                
                return $rs; // le résultat est retourné pour pouvoir afficher le message de succes
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } 
    }

    
    //RESEARCH BY idDestination
    public  function researchBy(int $idDestination){
            try{$db= parent :: connect();
                $stmt=$db->prepare("SELECT * FROM destination WHERE idDestination=:idDestination"); //récupère les données d'un utilisateur précisé
                $stmt->bindParam(':iDestination', $idDestination);
                $stmt->execute();
                $data=$stmt->fetch();
                $dest = new Destination();
                $dest->setIdDestination($data['idDestination'])->setRegion($data['region'])->setLieu($data['lieu'])->setImage($data['image'])->setPetiteDescription($data['petiteDescription'])->setDescription($data['description'])->setAtout1($data['atout1'])->setAtout2($data['atout2'])->setAtout3($data['atout3'])->setLien($data['lien'])->setExtraitForum($data['extraitForum']->setIdUser($data['idUser']));
                
                $rs->closeCursor();
                
        
                return $dest;
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        
    }

    //RESEARCH ALL
    public  function research(){
        try{$db= parent :: connect();

            $stmt=$db->prepare("SELECT * FROM destination"); //récupère toute les données de la table destination
            $stmt->execute();
            
            $data = $stmt->fetchAll();

            $i=0;
            foreach($data as $key=>$value){
                $dest= new Destination();
                $dest->setIdDestination($data[$i]['idDestination'])->setRegion($data[$i]['region'])->setLieu($data[$i]['lieu'])->setImage($data[$i]['image'])->setPetiteDescription($data[$i]['petiteDescription'])->setDescription($data[$i]['description'])->setAtout1($data[$i]['atout1'])->setAtout2($data[$i]['atout2'])->setAtout3($data[$i]['atout3'])->setLien($data[$i]['lien'])->setExtraitForum($data[$i]['extraitForum'])->setIdUser($data[$i]['idUser']);
                $tableauDestination[$i]=$dest;
                $i++;
            }
            
            $stmt->closeCursor();
            

            return $tableauDestination;
        } catch (PDOException $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }

    //UPDATE
    public function update(object $objet, int $idObjet){
        
        $region=$objet->getRegion();
        $lieu=$objet->getLieu();
        $image=$objet->getImage();
        $petiteDescription=$objet->getPetiteDescription();
        $description=$objet->getDescription();
        $atout1=$objet->getAtout1();
        $atout2=$objet->getAtout2();
        $atout3=$objet->getAtout3();
        $lien=$objet->getLien();
        $extraitForum=$objet->getExtraitForum();
            
        try{$db=parent :: connect();
            
            $stmt=$db->prepare("UPDATE destination SET region=:region, lieu=:lieu, image=:image, petiteDescription=:petiteDescription, description=:description, atout1=:atout1, atout2=:atout2 , atout3=:atout3, lien=:lien, extraitForum=:extraitForum WHERE idDestination=:idDestination"); // mise à jour des données
            $stmt->bindParam(':region', $region);
            $stmt->bindParam(':lieu', $lieu);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':petiteDescription', $petiteDescription);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':atout1', $atout1);
            $stmt->bindParam(':atout2', $atout2);
            $stmt->bindParam(':atout3', $atout3);
            $stmt->bindParam(':lien', $lien);
            $stmt->bindParam(':extraitForum', $extraitForum);
            $stmt->bindParam(':idDestination', $idDestination);
            $rs=$stmt->execute();

            
                        
            return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
        }catch (PDOException $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }

    //DELETE
    public  function delete(int $idDestination){
 
        try{$db=parent :: connect();
            $stmt=$db->prepare("DELETE * FROM destination WHERE idDestination=:idDestination"); // on supprime les données
            $stmt->bindParam(':idDestination', $idDestination);
            $rs=$stmt->execute();
                    
            return $rs;  /** le résultat est retourné pour pouvoir afficher le message de suppression */
        }catch (PDOException $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }
}