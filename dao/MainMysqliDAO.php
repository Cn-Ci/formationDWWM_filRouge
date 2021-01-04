<?php 
    require_once(__DIR__.'/DaoSqlException.php');
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once(__DIR__.'/interfaceDao.php');

    class mainMysqliDAO {
        public function getTopicOrderByDate() :?Array {
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM `topic` ORDER BY date DESC LIMIT 2");
                $searchRequest->execute();
                $rs = $searchRequest->fetchAll();
            } catch (mysqli_sql_exception $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            } finally {
                $result->free();
                $db->close();
                return $rs;
            }
        }
    }
?> 