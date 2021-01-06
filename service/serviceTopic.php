<?php
    require_once '../class/Topic.php';
    require_once '../service/ServiceException.php';
    require_once '../dao/TopicMysqliDAO.php';

    class ServiceTopic {
        public static function serviceAddTopic(String $titre, Datetime $DatePost, String $Content, Int $nbComm, Int $Author) :Void {
            $Topic = new Topic();
            $Topic->setTitreTopic($titre)->setDateTopic($DatePost)->setContentTopic($Content)->setNbComm($nbComm)->setIdAuthor($Author);

            try {
                TopicMysqliDAO::add($Topic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceResearchTopicBy(Int $idTopic) :?Topic {
            try {
                $data = TopicMysqliDao::researchBy($idTopic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }

            $Topic = new Topic();
            $Topic->setIdTopic($data[''])->setTitreTopic($data[''])->setDateTopic($data[''])->setContentTopic($data[''])->setNbComm($data[''])->setIdAuthor($data['']);

            return $Topic;
        }

        public static function serviceReseachAll() :?Array {
            try {
                $data = TopicMysqliDao::research();
                $dataToObject = array (); 
                foreach ($data as $value) {
                    /*$author = UserMysqliDao::researchBy($value['idUsers']);*/
                    $author = "test";
                    $Topic = new Topic();
                    $Topic->setTitreTopic($value['titreTopic'])->setDateTopic($value['date'])->setContentTopic($value['contenu'])->setNbComm($value['nbComm'])->setIdAuthor($author);
                    array_push($dataToObject, $Topic);
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
                TopicMysqliDAO::update($TopicToModify, $idTopic);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceDeleteTopic(Int $idTopicToDelete) :Void {
            try {    
                TopicMysqliDAO::delete($idTopicToDelete);
            } catch(DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceSearchByNbComments() :?Array {
            try {
                $topicsFiltered = TopicMysqliDAO::searchByNbComments();
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } finally {
                return $topicsFiltered;
            }
        }

        public static function serviceSearchByDate() :?Array {
            try {
                $topicsFiltered = TopicMysqliDAO::searchByDate();
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } finally {
                return $topicsFiltered;
            }
        }
    }
?>