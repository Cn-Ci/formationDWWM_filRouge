<?php 

class Commentaire {
    private $idComm;
    private $date;
    private $contenuComm;
    private $idAuthor;
    private $idTopic;
    
    function __toString() {
        return "[idComm] -> " . $this->idComm .
            "[date] -> " . $this->date .
            "[contenuComm] -> " .  $this->contenuComm .
            "[idAuthor] -> " .  $this->idAuthor .
            "[idTopic] -> " .  $this->idTopic;
    }

    public function getIdComm() :Int {
        return $this->idComm;
    }
    public function setIdComm(Int $idComm) :Self {
        $this->idComm = $idComm;
        return $this;
    }

    public function getDate() :Datetime {
        return $this->date;
    }
    public function setDate(Datetime $date) :Self {
        $this->date = $date;
        return $this;
    }

    public function getContenuComm() :String {
        return $this->contenuComm;
    }
    public function setContenuComm(String $contenuComm) :Self {
        $this->contenuComm = $contenuComm;
        return $this;
    }
 
    public function getIdAuthor() {
        return $this->idAuthor;
    }
    public function setIdAuthor(Int $idAuthor) :Self {
        $this->idAuthor = $idAuthor;
        return $this;
    }

    public function getIdTopic() :Int {
        return $this->idTopic;
    }
    public function setIdTopic(int $idTopic) :Self {
        $this->idTopic = $idTopic;
        return $this;
    }

    public function datetimeToString(Datetime $datetime) :?String {
        return $dateToString = $datetime->format('Y-m-d');
    }
}