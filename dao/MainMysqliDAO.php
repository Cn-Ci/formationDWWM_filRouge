<?php 
    require_once(__DIR__.'/DaoSqlException.php');
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once(__DIR__.'/interfaceDao.php');

    class MainMysqliDAO {
        static public function getTopicOrderByDate() :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchRecentPostRequest = $db->prepare("SELECT * FROM `topic` ORDER BY date DESC LIMIT 3");
                $searchRecentPostRequest->execute();
                $rs = $searchRecentPostRequest->fetchAll();
                return $rs;
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }
    }
?> 