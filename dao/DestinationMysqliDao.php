<?php

require_once(__DIR__.'/DaoSqlException.php');
require_once(__DIR__.'/ConnectionMysqliDao.php');
require_once(__DIR__.'/interfaceDao.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class DestinationMysqliDao extends ConnectionMysqliDao implements communDAO{

    //CREATE
    public function add(destination $objet){
            try{$db=parent :: connect(); //connection à la base de données
                $stmt= $db->prepare("INSERT INTO `destination` ('idDestination','region', 'lieu', 'image', 'petiteDescription','description', 'atout1', 'atout2', 'atout3','lien', 'extraitForum') VALUES (null,?,?,?,?,?,?,?,?,?,?)"); //requête SQL d'insertion
                $stmt->bind_param('ssssssssssss', $region, $lieu, $image, $petiteDescription, $description, $atout1, $atout2, $atout3,$lien, $extraitForum);
                $rs=$stmt->execute();
                $db->close();
                return $rs; // le résultat est retourné pour pouvoir afficher le message de succes
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } 
    }

    
    //RESEARCH BY idDestination
    public  function researchBy(string $idDestination){
            try{$db= parent :: connect();
                $stmt=$db->prepare("SELECT * FROM destination WHERE idDestination=?"); //récupère les données d'un utilisateur précisé
                $stmt->bind_param('i', $idDestination);
                $stmt->execute();
                $rs=$stmt->get_result();
                $data=$rs->fetch_array(MYSQLI_ASSOC);
                $dest = new Destination();
                $dest->setIdDestination($data['idDestination'])->setRegion($data['region'])->setLieu($data['lieu'])->setImage($data['image'])->setPetiteDescription($data['petiteDescription'])->setDescription($data['description'])->setAtout1($data['atout1'])->setAtout2($data['atout2'])->setAtout3($data['atout3'])->setLien($data['lien'])->setExtraitForum($data['extraitForum']);
                
                $rs->free();
                $db->close();
        
                return $dest;
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        
    }

    //RESEARCH ALL
    public  function research(){
        try{$db= parent :: connect();

            $stmt=$db->prepare("SELECT * FROM destination"); //récupère toute les données de la table destination
            $stmt->execute();
            $rs=$stmt->get_result();
            $data = $rs->fetch_all(MYSQLI_ASSOC);

            $i=0;
            foreach($data as $key=>$value){
                $dest= new Destination();
                $dest->setIdDestination($data['idDestination'])->setRegion($data['region'])->setLieu($data['lieu'])->setImage($data['image'])->setPetiteDescription($data['petiteDescription'])->setDescription($data['description'])->setAtout1($data['atout1'])->setAtout2($data['atout2'])->setAtout3($data['atout3'])->setLien($data['lien'])->setExtraitForum($data['extraitForum']);
                $data[$i]=$dest;
                $i++;
            }
            
            $rs->free();
            $db->close();

            return $data;
        } catch (mysqli_sql_exception $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }

    //UPDATE
    public function update(destination $objet){
        $idDestination= $objet->getIdDestination();
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
            
            $stmt=$db->prepare("UPDATE destination SET region=?, lieu=?, image=?, petiteDescription=?, description=?, atout1=?, atout2=? , atout3=?, lien=?, extraitForum=? WHERE idDestination=?"); // mise à jour des données
            $stmt->bind_param('ssssssssssi',$region, $lieu, $image, $description, $lien, $extraitForum, $idDestination);
            $rs=$stmt->execute();

            $db->close();
                        
            return $rs; /** le résultat est retourné pour pouvoir afficher le message de succes */
        }catch (mysqli_sql_exception $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }

    //DELETE
    public  function delete($id){
 
        try{$db=parent :: connect();
            $stmt=$db->prepare("DELETE FROM destination WHERE idDestination=?"); // on supprime les données
            $stmt->bind_param('i', $idDestination);
            $stmt->execute();
            $rs=$stmt->get_result();
                    
            $db->close();
            return $rs;  /** le résultat est retourné pour pouvoir afficher le message de suppression */
        }catch (mysqli_sql_exception $DaoException) {
            throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
        }
    }
}