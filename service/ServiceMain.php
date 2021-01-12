<?php
    require_once '../class/Topic.php';
    require_once '../service/ServiceException.php';
    require_once '../dao/MainMysqliDAO.php';

    class ServiceMain {
        public static function serviceGetTopicOrderByDate() :?Array {
            try {
                $data = MainMysqliDAO::getTopicOrderByDate();
                $dataToObject = array (); 
                foreach ($data as $value) {
                    $Topic = new Topic();
                    $date = new Datetime($value['date']);
                    $Topic->setIdTopic($value['idTopic'])->setTitreTopic($value['titreTopic'])->setDateTopic($date)->setContentTopic($value['contenu'])->setNbComm($value['nbComm'])->setIdAuthor(4);
                    array_push($dataToObject, $Topic);
                }
                
                return $dataToObject;

            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            } 
        }
    }
?>