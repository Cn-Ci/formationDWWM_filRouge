<?php 
    require_once(__DIR__.'/DaoSqlException.php');
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once(__DIR__.'/interfaceDao.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class TopicMysqliDAO implements interfaceDao {
        public function add(Object $Topic) :Void {
            $db = ConnectionMysqliDao::connect();

            $topicTitle     = $Topic->getTitreTopic();
            $topicDate      = $Topic->datetimeToString($Topic->getDateTopic());
            $topicContent   = $Topic->getContentTopic();
            $topicNbComment = $Topic->getNbComm();
            $idUser         = $Topic->getIdAuthor();

            try {
                $addRequest = $db->prepare("INSERT INTO topic (idTopic, titre, datePost, contenue, nbComm, author) VALUES (NULL, :titre, :datePost, :contenue, :nbComm, :author");
                $addRequest->execute($t= array(
                    ":titre"    => $topicTitle,
                    ":datePost" => $topicDate,
                    ":contenue" => $topicContent,
                    ":nbComm"   => $topicNbComment,
                    ":author"   => $idUser)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public function researchBy(Int $idTopic) :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM topic WHERE idTopic = :idTopic");
                $searchByRequest->execute(array(
                    ":idTopic" => $idTopic)
                );
                $result   = $searchByRequest->get_result();
                $data     = $result->fetch_array(MYSQLI_ASSOC);
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
            
            $result->free();
            $db->close();

            return $data;
        }

        public function research() :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchRequest = $db->query("SELECT * FROM topic AS t ORDER BY t.date DESC LIMIT 20");
                $searchRequest->execute();
                $Topics = $searchRequest->fetchAll();
                return $Topics;
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public function update(Object $Topic) :Void {
            $db = ConnectionMysqliDao::connect();

            $idTopic        = getIdTopic();
            $topicTitle     = getTitreTopic();
            $topicDate      = getDatePost();
            $topicContent   = getContenu();
            $topicNbComment = getNbComm();
            $idUser         = getIdUser();

            try {
                $updateRequest = $dbServ->prepare("UPDATE `employes` SET titre = :titre, datePost = :datePost, contenue = :contenue, nbComm = :nbComm, author = :author WHERE idTopic = :idTopic");
                $updateRequest->execute(array(
                    ":titre"    => $topicTitle,
                    ":datePost" => $topicDate,
                    ":contenue" => $topicContent,
                    ":nbComm"   => $topicNbComment,
                    ":author"   => $idUser,
                    ":idTopic"  => $idTopic)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $db->close();
            }
        }   

        public function delete(Int $idTopic) :Void {
            $db = ConnectionMysqliDao::connect();

            try {
                $DeleteRequest = $dbServ->prepare("DELETE FROM topic WHERE idTopic = :idTopic");
                $DeleteRequest->execute(array(
                    ":idTopic" => $idTopic)
                );
            } catch (PDOException  $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $db->close();
            }
        }     
        
        public function searchByNbComments() :?Array{
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM `topic` AS t ORDER BY t.nbComm DESC");
                $searchByRequest->execute();
                $rs = $searchByRequest->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                return $rs;
            }
        }

        public function searchByDate() :?Array{
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM `topic` AS t ORDER BY t.date DESC");
                $searchByRequest->execute();
                $rs = $searchByRequest->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                return $rs;
            }
        }
    }
?> 
