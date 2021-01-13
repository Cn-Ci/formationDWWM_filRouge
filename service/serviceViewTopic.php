<?php 
require_once '../dao/UserConnectMysqliDAO.php';

    class ServiceViewTopic {
        static public function searchUserById(Int $id) :Object {
            $author = UserConnectMysqliDAO::researchUserById($id);
            return $author;
        }
    }