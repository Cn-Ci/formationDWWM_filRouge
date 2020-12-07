<?php 
    require_once(__DIR__.'/DaoSqlException.php');
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once(__DIR__. '/interfaceDao.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class TopicMysqliDAO implements communDAO {
        public static function add(Object $Topic) :Void {
            $db = ConnectionMysqliDao::connect();

            $topicTitle     = getTitreTopic();
            $topicDate      = getDatePost();
            $topicContent   = getContenu();
            $topicNbComment = getNbComm();
            $idUser         = getIdUser();

            try {
                $addRequest = $db->prepare("INSERT INTO topic (idTopic, titre, datePost, contenue, nbComm, author) VALUES (NULL, UPPER(:titre), :datePost, :contenue, :nbComm, :author");
                $addRequest->execute(array(
                    ":titre"    => $topicTitle,
                    ":datePost" => $topicDate,
                    ":contenue" => $topicContent,
                    ":nbComm"   => $topicNbComment,
                    ":author"   => $idUser));
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $db->close();
            }
        }

        public static function researchBy(Int $idTopic) :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM topic WHERE idTopic = :idTopic");
                $searchByRequest->execute(array(
                    ":idTopic" => $idTopic));
                $result   = $searchByRequest->get_result();
                $data     = $result->fetch_array(MYSQLI_ASSOC);
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
            
            $result->free();
            $db->close();

            return $data;
        }

        public  function research() :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchRequest = $db->query("SELECT * FROM topic");
                $result       = $searchRequest->get_result();
                $dataAllTopic = $result->fetch_all(MYSQLI_ASSOC);
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }

            $result->free();
            $db->close();

            return $dataAllTopic;
        }

        public function update(Object $Topic, $idTopic) :Void {
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
                    ":idTopic"  => $idTopic));
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $db->close();
            }
        }   

        public  function delete(Int $idTopic) :Void {
            $db = ConnectionMysqliDao::connect();

            try {
                $DeleteRequest = $dbServ->prepare("DELETE FROM topic WHERE idTopic = :idTopic");
                $DeleteRequest->execute(array(":idTopic" => $idTopic));
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $db->close();
            }
        }        
    }
?> 