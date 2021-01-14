<?php 

class Commentaire {
    private $idComm;
    private $date;
    private $contenuComm;
    private $idUsers;
    private $idTopic;
    
    function __toString() {
        return "[idComm] -> " . $this->idComm .
            "[date] -> " . $this->date .
            "[contenuComm] -> " .  $this->contenuComm .
            "[idUsers] -> " .  $this->idUsers .
            "[idTopic] -> " .  $this->idTopic;
    }

    public function getIdComm() :Int
    {
        return $this->idComm;
    }
    public function setIdComm(Int $idComm) :Self
    {
        $this->idComm = $idComm;
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

    public function getContenuComm() :String 
    {
        return $this->contenuComm;
    }
    public function setContenuComm(String $contenuComm) :Self
    {
        $this->contenuComm = $contenuComm;
        return $this;
    }
 
    public function getIdUsers()
    {
        return $this->idUsers;
    }
    public function setIdUsers(Int $idUsers) :Self
    {
        $this->idUsers = $idUsers;
        return $this;
    }

    public function getIdTopic() :Int
    {
        return $this->idTopic;
    }
    public function setIdTopic(int $idTopic) :Self
    {
        $this->idTopic = $idTopic;
        return $this;
    }
}