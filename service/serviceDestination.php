<?php
    require_once(__DIR__.'/DestiantionMysqliDao.php');
    require_once(__DIR__.'/ServiceException.php');
    

    class ServiceDestination implements communDestinationService, communService {
        public  function serviceAddDestination($id=null, string $region, string $lieu, string $image, string $petiteDescription, string $description,string $atout1, string $atout2, string $atout3,string $lien, string $extraitForum, string $idUser): void {
            $dest = new Destination();
            $dest->setId($id)->setRegion($region)->setLieu($lieu)->setImage($image)->setPetiteDescription($petiteDescription)->setDescription($description)->setAtout1($atout1)->setAtout2($atout2)->setAtout3($atout3)->setLien($lien)->setExtraitForum($extraitForum);

            try {
                DestinationMysqliDao::add($dest);
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public  function serviceResearchBy(Int $idDestination) :?Destination {
            try {
                $data = DestinationMysqliDao::researchBy($idDestination);
                return $data;
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public  function serviceReseachAll() {
            try {
                $data = DestinationMysqliDao::research();
                return $data;
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }

        }

        public  function serviceUpdateDestination(Int $idDestination, string $region, string $lieu, string $image, string $petiteDescription, string $description,string $atout1, string $atout2, string $atout3,string $lien, string $extraitForum, string $idUser) {
            $destinationToModify = new Destination();
            $destinationToModify>setId($id)->setRegion($region)->setLieu($lieu)->setImage($image)->setPetiteDescription($petiteDescription)->setDescription($description)->setAtout1($atout1)->setAtout2($atout2)->setAtout3($atout3)->setLien($lien)->setExtraitForum($extraitForum);


            try {
                $rs=DestinationMysqliDAO::update($destinationToModify);
                return $rs ;
            } catch (DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }

        public  function serviceDelete(Int $idDestination) {
            try {    
                DestinationMysqliDao::delete($idDestination);
            } catch(DaoSqlException $ServiceException) {
                throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
            }
        }
    }
?>