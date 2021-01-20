<?php 
    require_once(__DIR__.'/DaoSqlException.php');
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once(__DIR__.'/interfaceDao.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class PersonnelSqliDAO  {
        public function add(Object $personnel) :Void {
            $nom    = $personnel->getNom();
            $prenom = $personnel->getPrenom();
            $emp    = $personnel->getEmploi();
            $desc   = $personnel->getDescription();
            $photo  = $personnel->getPhoto();
            $fb     = $personnel->getFbLink();
            $tw     = $personnel->getTwLink();
            $li     = $personnel->getLiLink();

            //* CONNECT DB
            $db = ConnectionMysqliDao::connect();   

            //* ADD   
            try {
                $addRequest = $db->prepare("INSERT INTO personnel (id, nom, prenom, emploi, description, photo, facebookLink, twitterLink, linkedinLink) VALUES (NULL, :nom, :prenom, :emp, :description, :photo, :fb, :tw, :li");
                $addRequest->execute(array(
                    ":nom"         => $nom,
                    ":prenom"      => $prenom,
                    ":emp"         => $emp,
                    ":description" => $desc,
                    ":photo"       => $photo,
                    ":fb"          => $fb,
                    ":tw"          => $tw,
                    ":li"          => $li));
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                
            }
        }
         
        public function searchBy(String $id) :?Personnel {
            //* CONNECT DB
            $db = ConnectionMysqliDao::connect();
            //* REQUETE SQL SEARCH BY ID
            try {
                $stmt   = $db->prepare("SELECT * FROM personnel WHERE id= :id");
                $stmt->bindParam(":id" , $id);
                $stmt->execute();
                $data   = $stmt->fetch();

                $personnel = new Personnel();
                $personnel->setId($data['id'])->setNom($data['nom'])->setPrenom($data['prenom'])->setEmploi($data['emploi'])->setDescription($data['description'])->setPhoto($data['photo'])->setFbLink($data['facebookLink'])->setTwLink($data['twitterLink'])->setLiLink($data['linkedinLink']);

                $stmt->closeCursor();

                return $personnel;
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                
    
                
            }
        }

        public function searchAllPersonnel() :?Array {
            // CONNECTION DB
            $db = ConnectionMysqliDao :: connect();

            //REQUETE SQL SEARCHALL
            try{
                $query    = $db->prepare("SELECT * FROM personnel ");
                $query    ->execute();
                $data         = $query->fetchAll();
                
                $i=0;
                foreach($data as $key=>$value){
                    
                    $personnel= new Personnel();
                    $personnel->setId($data[$i]['id'])->setNom($data[$i]['nom'])->setPrenom($data[$i]['prenom'])->setEmploi($data[$i]['emploi'])->setDescription($data[$i]['description'])->setPhoto($data[$i]['photo'])->setFbLink($data[$i]['facebookLink'])->setTwLink($data[$i]['twitterLink'])->setLiLink($data[$i]['linkedinLink']);
                    $tableauPersonnels[$i]=$personnel;
                    $i++;
                }

            }catch (PDOException $DaoException){
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCOde());
            }finally{
                
                $query->closeCursor();

                return $tableauPersonnels;
            }
        }
    }
?> 