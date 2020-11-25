<?php

class Topic {
    private $idTopic;
    private $titreTopic;
    private $date;
    private $contenu;
    private $nbComm;
    private $idUser;

    function __toString() {
        return "[idTopic] -> " . $this->idTopic .
            "[titreTopic] -> " . $this->titreTopic .
            "[date] -> " . $this->date .
            "[contenu] -> " . $this->contenu .
            "[nbComm] -> " . $this->nbComm .
            "[idUser] -> " . $this->idUser;
    }
    
    public function getIdTopic() :Int
    {
        return $this->idTopic;
    }
    public function setIdTopic(Int $idTopic) :Self
    {
        $this->idTopic = $idTopic;
        return $this;
    }
 
    public function getTitreTopic() :String
    {
        return $this->titreTopic;
    }
    public function setTitreTopic(String $titreTopic) :Self
    {
        $this->titreTopic = $titreTopic;
        return $this;
    }
 
    public function getDate() :Datetime
    {
        return $this->date;
    }
    public function setDate(Datetime $date) :Self
    {
        $this->date = $date;
        return $this;
    }
 
    public function getContenu() :String
    {
        return $this->contenu;
    }
    public function setContenu($contenu) :Self
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getNbComm() :Int
    {
        return $this->nbComm;
    }
    public function setNbComm(Int $nbComm) :Self 
    {
        $this->nbComm = $nbComm;
        return $this;
    }

    public function getIdUser() :Int
    {
        return $this->idUser;
    }
    public function setIdUser(Int $idUser) :Self//? Jointure SQL pas besoin de getter and setter ? 
    {
        $this->idUser = $idUser;
        return $this;
    }
}