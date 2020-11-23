<?php 

class Commentaire {
    private $idComm;
    private $date;
    private $contenuComm;
    private $idUsers;
    private $idTopic;
    
    function toString() {
        return 
        $this->idComm;
        $this->date;
        $this->contenuComm;
        $this->idUsers;
        $this->idTopic;
    }

    public function getIdComm()
    {
        return $this->idComm;
    }

    public function setIdComm($idComm)
    {
        $this->idComm = $idComm;

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

    public function getContenuComm()
    {
        return $this->contenuComm;
    }

    public function setContenuComm($contenuComm)
    {
        $this->contenuComm = $contenuComm;

        return $this;
    }
 
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    public function setIdUsers($idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
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
}