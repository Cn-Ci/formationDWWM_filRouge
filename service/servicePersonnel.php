<?php
require_once '../dao/UserConnectMysqliDAO.php';
require_once '../class/Personnel.php';
require_once '../service/ServiceException.php';
require_once '../dao/PersonnelSqliDAO.php';

class ServicePersonnel {
    public static function addPersonnel(Personnel $personnel) :Void {
        
        try {
            $dao = new PersonnelSqliDAO();
            $dao->add($personnel);
            
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

    public static function updatePersonnel(Personnel $personnel){
        try{
            (new PersonnelSqliDAO())->updatePersonnelDAO($personnel);
        }catch(DaoSqlException $ServiceException){
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }   
    }

    public static function serviceDeletePersonnel(int $id) : void{
        try{
            (new PersonnelSqliDAO())->deletePersonnelDAO($id);
        }catch(DaoSqlException $ServiceException){
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }   
    }
}