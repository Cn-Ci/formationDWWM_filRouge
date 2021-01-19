<?php 
    require_once(__DIR__.'/ConnectionMysqliDao.php');
    require_once('../service/serviceCommentTopic.php');
    require_once('../Exception/PDOException.php');

    class DaoCommentTopic {
        public static function searchAllCommentByIdTopic(Int $idTopic) :?Array{
            $db = ConnectionMysqliDao::connect();

            try {
                $searchByRequest = $db->prepare("SELECT * FROM commentaire WHERE idTopic = :idTopic");
                $searchByRequest->execute(array(
                    ":idTopic" => $idTopic)
                );
                $data = $searchByRequest->fetchAll();
                return $data;
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public static function addComment(Commentaire $comment) :Void {
            $db = ConnectionMysqliDao::connect();

            $commentDate      = $comment->datetimeToString($comment->getDate());
            $commentContent   = $comment->getContenuComm();
            $idAuthor         = $comment->getIdAuthor();
            $idPost           = $comment->getIdTopic();

            //* LAUNCH AUTO INCREMENT OF NBCOMM IN PARENTTOPIC
            Self::incrementParentPostNbComm($idPost);

            try {
                $addRequest = $db->prepare("INSERT INTO commentaire (idComm, date, contenuComm, idUsers, idTopic) VALUES (NULL, :dateComm, :contentComm, :idAuthor, :idPost)");
                $addRequest->execute(array(
                    ":dateComm"    => $commentDate,
                    ":contentComm" => $commentContent,
                    ":idAuthor"    => $idAuthor,
                    ":idPost"      => $idPost)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public static function delete(Int $idComm) {
            $db = ConnectionMysqliDao::connect();

            //* LAUNCH AUTO DECREMENT OF NBCOMM IN PARENTTOPIC
            Self::decrementParentPostNbComm($idComm);

            try {
                $deleteRequest = $db->prepare("DELETE FROM commentaire WHERE idComm = :idComm");
                $deleteRequest->execute(array(
                    ":idComm" => $idComm)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public static function modify(Int $idComm) {}

        public static function incrementParentPostNbComm(Int $idTopic) :Void {
            $db = ConnectionMysqliDao::connect();

            try {
                $incrementComm = $db->prepare("UPDATE `topic` SET nbComm = (@cur_value := nbComm) + 1 WHERE idTopic = :idTopic");
                $incrementComm->execute(array(
                    ":idTopic" => $idTopic)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }

        public static function decrementParentPostNbComm(int $idTopic) :Void {
            $db = ConnectionMysqliDao::connect();

            try {
                $incrementComm = $db->prepare("UPDATE `topic` SET nbComm = (@cur_value := nbComm) - 1 WHERE idTopic = :idTopic");
                $incrementComm->execute(array(
                    ":idTopic" => $idTopic)
                );
            } catch (PDOException $DaoException) {
                throw new DaoSqlException($DaoException->getMessage(), $DaoException->getCode());
            }
        }
    }