<?php

class Topic implements JsonSerializable{
    private $idTopic;
    private $titreTopic;
    private $date;
    private $contenu;
    private $nbLike;
    private $nbComm;
    private $Author;

    function __toString() {
        return "[idTopic] -> " . $this->idTopic .
            "[titreTopic] -> " . $this->titreTopic .
            "[date] -> " . $this->date .
            "[contenu] -> " . $this->contenu .
            "[nbComm] -> " . $this->nbComm .
            "[idUser] -> " . $this->idUser;
    }

    public function jsonSerialize() {
        return [
            'idTopic'    => $this->getIdTopic(),
            'title'      => $this->getTitreTopic(),
            'date'       => $this->datetimeToString($this->getDateTopic()),
            'content'    => $this->getContentTopic(),
            'nbComments' => $this->getNbComm(),
            'idAuthor'   => $this->getIdAuthor()
        ];
    }

    public function datetimeToString($datetime) :?String {
        return $dateToString = $datetime->format('Y-m-d');
    }
    
    public function getIdTopic() :Int {
        return $this->idTopic;
    }
 
    public function getTitreTopic() :String {
        return $this->titreTopic;
    }
    public function setTitreTopic(String $titreTopic) :Self {
        $this->titreTopic = $titreTopic;
        return $this;
    }
 
    public function getDateTopic() :Datetime {
        return $this->date;
    }
    public function setDateTopic(String $StringDate) :Self {
        $date = new datetime($StringDate);
        $this->date = $date;
        return $this;
    }
 
    public function getContentTopic() :String {
        return $this->contenu;
    }
    public function setContentTopic($contenu) :Self {
        $this->contenu = $contenu;
        return $this;
    }

    public function getNbComm() :Int {
        return $this->nbComm;
    }
    public function setNbComm(Int $nbComm) :Self {
        $this->nbComm = $nbComm;
        return $this;
    }

    public function getIdAuthor() :String {
        return $this->idAuthor;
    }
    public function setIdAuthor(String $idAuthor) {
        $this->Author = $Author;
        return $this;
    }
}