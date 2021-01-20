<?php
require_once '../dao/UserConnectMysqliDAO.php';
require_once '../class/Personnel.php';
require_once '../service/ServiceException.php';
require_once '../dao/PersonnelSqliDAO.php';

class ServicePersonnel {
    public static function serviceAddPersonne(String $nom, String $prenom, String $emp, String $desc, String $photo, String $fb, String $tw, String $li) :Void {
        $Personnel = new Personnel();
        $Personnel->setNom($prenom)->setPrenom($nom)->setEmploi($emp)->setDescription($desc)->setPhoto($photo)->setFbLink($fb)->setTwLink($tw)->setLiLink($li);

        try {
            $dao = new PersonnelSqliDAO();
            $dao->add($Personnel);
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }
    }

    public static function serviceResearchPersonnelBy(Int $idPersonnel) :?Personnel {
        try {
            $personnel = ( new PersonnelSqliDAO())->searchBy($idPersonnel);
            return $personnel;
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }
    }

    public static function searchAllPersonnels() : Array {
        try{
            $datas = (new PersonnelSqliDAO())->searchAllPersonnel();
            return $datas;

        }catch(DaoSqlException $ServiceException){
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }
    }
}