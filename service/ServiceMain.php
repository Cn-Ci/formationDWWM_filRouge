<?php
    require_once '../class/Topic.php';
    require_once '../service/ServiceException.php';
    require_once '../dao/MainMysqliDAO.php';

    class ServiceTopic {
        public static function serviceGetTopicOrderByDate() :?Array {
            try {
                $data = TopicMysqliDao::getTopicOrderByDate();
                $dataToObject = array (); 
                foreach ($data as $value) {
                    $author = "test";
                    $Topic = new Topic();
                    $Topic->setTitreTopic($value['titreTopic'])->setDateTopic($value['date'])->setContentTopic($value['contenu'])->setNbComm($value['nbComm'])->setIdAuthor($value['author']);
                    array_push($dataToObject, $Topic);
                }
                
                return $dataToObject;

            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } 
        }
    }
?>