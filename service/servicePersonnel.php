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

    public static function serviceResearchPersonnelBy(Int $idPersonnel) :?Topic {
        try {
            $dao = new PersonnelSqliDAO();
            $data = $dao->searchBy($idTopic);
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }

        $Personnel = new Personnel();
        $Personnel->setId($data['id'])->setNom($data['nom'])->setPrenom($data['prenom'])->setEmploi($data['emploi'])->setDescription($data['description'])->setPhoto($data['photo'])->setFbLink($data['facebookLink'])->setTwLink($data['twitterLink'])->setLiLink($data['linkedinLink']);

        return $Personnel;
    }
}