<?php 

class Destination extends Region{
    private $idDestination;
    private $region;
    private $lieu;
    private $image;
    private $petiteDescription;
    private $description;
    private $atout1;
    private $atout2;
    private $atout3;
    private $lien;
    private $extraitForum;
    private $idUser;
    
    function __toString(){
        return "[Destinations] -> "  . $this->idDestination .
            "[lieu] -> " . $this->lieu .
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

    /**
     * Get the value of region
     */ 
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */ 
    public function setRegion($region)
    {
        $this->region = $region;

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

    /**
     * Set the value of petiteDescription
     *
     * @return  self
     */ 
    public function setPetiteDescription($petiteDescription)
    {
        $this->petiteDescription = $petiteDescription;

        return $this;
    }

    /**
     * Get the value of petiteDescription
     */ 
    public function getPetiteDescription()
    {
        return $this->petiteDescription;
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

    /**
     * Get the value of atout1
     */ 
    public function getAtout1()
    {
        return $this->atout1;
    }

    /**
     * Set the value of atout1
     *
     * @return  self
     */ 
    public function setAtout1($atout1)
    {
        $this->atout1 = $atout1;

        return $this;
    }

    /**
     * Get the value of atout1
     */ 
    public function getAtout2()
    {
        return $this->atout1;
    }

    /**
     * Set the value of atout1
     *
     * @return  self
     */ 
    public function setAtout2($atout2)
    {
        $this->atout1 = $atout1;

        return $this;
    }

    /**
     * Get the value of atout1
     */ 
    public function getAtout3()
    {
        return $this->atout1;
    }

    /**
     * Set the value of atout1
     *
     * @return  self
     */ 
    public function setAtout3($atout3)
    {
        $this->atout1 = $atout1;

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
