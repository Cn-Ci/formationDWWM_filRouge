<?php
    require_once '../dao/UserConnectMysqliDAO.php';
    require_once '../class/Topic.php';
    require_once '../service/ServiceException.php';
    require_once '../dao/TopicMysqliDAO.php';

    class ServiceTopic {
        public static function serviceAddTopic(String $titre, Datetime $DatePost, String $Content, Int $nbComm, Int $Author) :Void {
            $Topic = new Topic();
            $Topic->setTitreTopic($titre)->setDateTopic($DatePost)->setContentTopic($Content)->setNbComm($nbComm)->setIdAuthor($Author);

            try {
                $dao = new TopicMysqliDAO();
                $dao->add($Topic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceResearchTopicBy(Int $idTopic) :?Topic {
            try {
                $dao = new TopicMysqliDAO();
                $data = $dao->researchBy($idTopic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }

            $Topic = new Topic();
            $date = new Datetime($data['date']);
            $Topic->setIdTopic($data['idTopic'])->setTitreTopic($data['titreTopic'])->setDateTopic($date)->setContentTopic($data['contenu'])->setNbComm($data['nbComm'])->setIdAuthor($data['idUsers']);

            return $Topic;
        }

        public static function serviceReseachAll() :?Array {
            $dao = new TopicMysqliDao();
            $dataToObject = array (); 
            try {
                $data = $dao->research();
                foreach ($data as $value) {
                    $author = UserConnectMysqliDAO::researchUserById($value['idUsers']);
                    $Topic = new Topic();
                    $datePost = new Datetime($value['date']);
                    $Topic->setIdTopic($value['idTopic'])->setTitreTopic($value['titreTopic'])->setDateTopic($datePost)->setContentTopic($value['contenu'])->setNbComm($value['nbComm'])->setIdAuthor($author->getPseudo());
                    array_push($dataToObject, $Topic);
                }
                
                return $dataToObject;

            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } 
        }

        public  static function serviceSearchAllPerTen($premierTopic, $topicParPage){
            $dao = new TopicMysqliDao();
            $dataToObject = array();
            try{
                $data = $dao->researchPerTen($premierTopic, $topicParPage);
                foreach ($data as $value) {
                    $author = UserConnectMysqliDAO::researchUserById($value['idUsers']);
                    $topic = new Topic();
                    $datePost = new Datetime($value['date']);
                    $topic->setIdTopic($value['idTopic'])->setTitreTopic($value['titreTopic'])->setDateTopic($datePost)->setContentTopic($value['contenu'])->setNbComm($value['nbComm'])->setIdAuthor($author->pseudo);
                    array_push($dataToObject, $topic);
                }
                return $dataToObject;

            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } 
        }

        public static function serviceUpdateTopic(Int $idTopic, String $titre, Datetime $DatePost, String $Content, Int $nbComm, Int $idAuthor) :Void {
            $TopicToModify = new Topic();
            $TopicToModify->setTitreTopic($titre)->setDateTopic($DatePost)->setContentTopic($Content)->setNbComm($nbComm)->setIdAuthor($idAuthor);

            try {
                $dao = new TopicMysqliDAO();
                $dao->update($TopicToModify, $idTopic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceDeleteTopic(Int $idTopicToDelete) :Void {
            try {    
                $dao = new TopicMysqliDAO();
                $dao->delete($idTopicToDelete);
            } catch(DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceSearchByNbComments() :?Array {
            try {
                $dao = new TopicMysqliDao();
                $topicsFiltered = $dao->searchByNbComments();
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } finally {
                return $topicsFiltered;
            }
        }

        public static function serviceSearchByDate() :?Array {
            try {
                $dao = new TopicMysqliDAO();
                $topicsFiltered = $dao->searchByDate();
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } finally {
                return $topicsFiltered;
            }
        }
    }
?>