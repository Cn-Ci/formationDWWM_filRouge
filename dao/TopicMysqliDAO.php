<?php 

    include_once(__DIR__.'/ConnectionMysqliDao.php');

    class TopicMysqliDAO implements communDAO {
        public static function add(Object $Topic) :Void {
            $db = ConnectionMysqliDao::connect();

            $topicTitle     = getTitreTopic();
            $topicDate      = getDatePost();
            $topicContent   = getContenu();
            $topicNbComment = getNbComm();
            $idUser         = getIdUser();

            $addRequest = $db->prepare("INSERT INTO topic (idTopic, titre, datePost, contenue, nbComm, author) VALUES (NULL, UPPER(:titre), :datePost, :contenue, :nbComm, :author");
            $addRequest->execute(array(
                ":titre"    => $topicTitle,
                ":datePost" => $topicDate,
                ":contenue" => $topicContent,
                ":nbComm"   => $topicNbComment,
                ":author"   => $idUser));

            $db->close();
        }

        public static function researchBy(Int $idTopic) :?Array {
            $db = ConnectionMysqliDao::connect();

            $searchByRequest = $db->prepare("SELECT * FROM topic WHERE idTopic = :idTopic");
            $searchByRequest->execute(array(":idTopic" => $idTopic));

            $result   = $searchByRequest->get_result();
            $data     = $result->fetch_array(MYSQLI_ASSOC);

            $result->free();
            $db->close();
        }

        public  function research() :Array {
            $db = ConnectionMysqliDao::connect();

            $searchRequest = $db->prepare("SELECT * FROM topic");
            $searchRequest->execute();

            $result       = $searchRequest->get_result();
            $dataAllTopic = $result->fetch_all(MYSQLI_ASSOC);

            $result->free();
            $db->close();
        }

        public function update(Object $Topic) :Void {
            $db = ConnectionMysqliDao::connect();

            $idTopic        = getIdTopic();
            $topicTitle     = getTitreTopic();
            $topicDate      = getDatePost();
            $topicContent   = getContenu();
            $topicNbComment = getNbComm();
            $idUser         = getIdUser();

            $updateRequest = $dbServ->prepare("UPDATE `employes` SET titre = :titre, datePost = :datePost, contenue = :contenue, nbComm = :nbComm, author = :author WHERE idTopic = :idTopic");
            $updateRequest->execute(array(
                ":titre"    => $topicTitle,
                ":datePost" => $topicDate,
                ":contenue" => $topicContent,
                ":nbComm"   => $topicNbComment,
                ":author"   => $idUser,
                ":idTopic"  => $idTopic));

            $db->close();
        }   

        public  function delete(Int $idTopic) :Void {
            $db = ConnectionMysqliDao::connect();

            $DeleteRequest = $dbServ->prepare("DELETE FROM topic WHERE idTopic = :idTopic");
            $DeleteRequest->execute(array(":idTopic" => $idTopic));

            $db->close();
        }        
    }
?> 