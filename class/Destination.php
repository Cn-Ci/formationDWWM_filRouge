<?php 

class Destination extends Region{
    private $idDestination;
    private $lieu;
    private $image;
    private $description;
    private $lien;
    private $extraitForum;
    private $idUser;
    
    function __toString(){
        return "[Destinations] -> "  . $this->idDestination .
            "[lieu] -> " $this->lieu .
            "[image] -> " . $this->image . 
            "[description] -> " . $this->description .   
            "[lien] -> " . $this->lien .
            "[extraitForum] -> " . $this->extraitForum .
            "[idUser] -> " . $this->idUser;
    }

    public function getIdDestination() :Int
    {
        return $this->idDestination;
    }
    public function setIdDestination(Int $idDestination) :Self
    {
        $this->idDestination = $idDestination;
        return $this;
    }

    public function getLieu() :String
    {
        return $this->lieu;
    }
    public function setLieu(String $lieu) :Self
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getImage() :String
    {
        return $this->image;
    }
    public function setImage(String $image) :Self //? Url de l'image ?
    {
        $this->image = $image;
        return $this;
    }

    public function getDescription() :String
    {
        return $this->description;
    }
    public function setDescription(String $description) :Self
    {
        $this->description = $description;
        return $this;
    }

    public function getLien() :String
    {
        return $this->lien;
    }
    public function setLien(String $lien) :Self
    {
        $this->lien = $lien;
        return $this;
    }

    public function getExtraitForum() :String
    {
        return $this->extraitForum;
    }
    public function setExtraitForum(String $extraitForum) :Self
    {
        $this->extraitForum = $extraitForum;
        return $this;
    }

    public function getIdUser() :Int
    {
        return $this->idUser;
    }
    public function setIdUser(Int $idUser) :Self //? Bdd génère les ids ?
    {
        $this->idUser = $idUser;
        return $this;
    }
}
