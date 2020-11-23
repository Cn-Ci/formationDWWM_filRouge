<?php 

class Destinations {
    private $idDestination;
    private $lieu;
    private $image;
    private $description;
    private $lien;
    private $extraitForum;
    private $idUser;
    
    function toString(){
        return 
        $this->idDestination;
        $this->lieu;
        $this->image;
        $this->description;
        $this->lien;
        $this->extraitForum;
        $this->idUser;
    }

    public function getIdDestination()
    {
        return $this->idDestination;
    }
 
    public function setIdDestination($idDestination)
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    public function getLieu()
    {
        return $this->lieu;
    }

    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getLien()
    {
        return $this->lien;
    }

    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }
 
    public function getExtraitForum()
    {
        return $this->extraitForum;
    }

    public function setExtraitForum($extraitForum)
    {
        $this->extraitForum = $extraitForum;

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