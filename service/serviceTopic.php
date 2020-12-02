<?php
    require_once '../class/Topic.php';
    require_once '../class/ServiceException.php';
    require_once '../dao/TopicMysqliDAO.php';

    class ServiceTopic {
        public static function serviceAddTopic(String $titre, Datetime $DatePost, String $Content, Int $nbComm, Int $idAuthor) :Void {
            $Topic = new Topic();
            $Topic->setTitreTopic()->setDateTopic()->setContentTopic()->setNbComm()->setIdAuthor();

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
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }

            $dataToObject = array ();

            foreach ($data as $value) {
                $Topic = new Topic();
                $Topic->setIdTopic($value[''])->setTitreTopic($value[''])->setDateTopic($value[''])->setContentTopic($value[''])->setNbComm($value[''])->setIdAuthor($value['']);
                array_push($dataToObject, $Topic);
            }

            return $dataToObject;
        }

        public static function serviceUpdateTopic(Int $idTopic, String $titre, Datetime $DatePost, String $Content, Int $nbComm, Int $idAuthor) :Void {
            $TopicToModify = new Topic();
            $TopicToModify->setIdTopic($idTopic)->setTitreTopic($titre)->setDateTopic($DatePost)->setContentTopic($Content)->setNbComm($nbComm)->setIdAuthor($idAuthor);

            try {
                TopicMysqliDAO::update($TopicToModify);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public static function serviceDeleteTopic(Int $idTopicToDelete) :Void {
            try {    
                Employe_mysqli_DAO::delete($idTopicToDelete);
            } catch(DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }
    }
?>