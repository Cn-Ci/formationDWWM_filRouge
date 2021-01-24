<?php
require_once '../controller/controllerAddComment.php';
require_once '../dao/DaoCommentTopic.php';
require_once '../class/Commentaire.php';

class ServiceCommentTopic {
    public static function addComment(Int $idAuthor, String $content, Datetime $DatePost, Int $idTopic) :Void {
        $commentaire = new Commentaire();
        $commentaire->setIdAuthor($idAuthor)->setContenuComm($content)->setDate($DatePost)->setIdTopic($idTopic);
        
        try {
            $dao = new DaoCommentTopic();
            $dao->addComment($commentaire);
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }
    }

    public static function ServiceSearchAllCommentByIdTopic(Int $idTopic) :?Array {
        try {
            $dao = new DaoCommentTopic();
            $dataToObject = array (); 
            $commentaires = $dao->searchAllCommentByIdTopic($idTopic);

            foreach ($commentaires as $commentaire) {
                $idComm   = $commentaire['idComm'];
                $idAuthor = $commentaire['idUsers'];
                $content  = $commentaire['contenuComm'];
                $idTopic  = $commentaire['idTopic'];
                $date     = new Datetime($commentaire['date']);
                
                $commentaire = new Commentaire();
                $commentaire->setIdComm($idComm)->setIdAuthor($idAuthor)->setContenuComm($content)->setDate($date)->setIdTopic($idTopic);
                array_push($dataToObject, $commentaire);
            }
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }

        return $dataToObject;
    }

    public static function modifyComment(Int $idComment) {

    }

    public function deleteComment(Int $idComment, Int $idParentTopic) :Void {
        try {
            $dao = new DaoCommentTopic();
            $dao->delete($idComment, $idParentTopic);
        } catch (DaoSqlException $ServiceException) {
            throw new ServiceException($ServiceException->getMessage(), $ServiceException->getCode());
        }
    }
}