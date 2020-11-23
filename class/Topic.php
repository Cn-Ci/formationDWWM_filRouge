<?php

class Topic {
    private $idTopic;
    private $titreTopic;
    private $date;
    private $contenu;
    private $nbComm;
    private $idUser;

    function toString() {
        return 
        $this->idTopic;
        $this->titreTopic;
        $this->date;
        $this->contenu;
        $this->nbComm;
        $this->idUser;
    }
    
    public function getIdTopic()
    {
        return $this->idTopic;
    }

    public function setIdTopic($idTopic)
    {
        $this->idTopic = $idTopic;

        return $this;
    }
 
    public function getTitreTopic()
    {
        return $this->titreTopic;
    }

    public function setTitreTopic($titreTopic)
    {
        $this->titreTopic = $titreTopic;

        return $this;
    }
 
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
 
    public function getContenu()
    {
        return $this->contenu;
    }
 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getNbComm()
    {
        return $this->nbComm;
    }

    public function setNbComm($nbComm)
    {
        $this->nbComm = $nbComm;

        return $this;
    }
 
    public function getIdUser()
    {
        return $this->idUser;
    }
 
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }
}