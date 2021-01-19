<?php 

class User {
    private $id;
    private $pseudo;
    private $email;
    private $nom;
    private $prenom;
    private $photo;
    private $mdp;
    private $profil;
    
    function __toString() {
        return "[id] -> " . $this->id .
            "[pseudo] -> " . $this->pseudo .
            "[email] -> " . $this->email .
            "[nom] -> " . $this->nom .
            "[prenom] -> " . $this->prenom .
            "[photo] -> " . $this->photo .
            "[mdp] -> " . $this->mdp .
            "[profil] -> " . $this->profil;
    }

    public function jsonSerialize() {
        return [
            'id'        => $this->getId(),
            'pseudo'    => $this->getPseudo(),
            'email'     => $this->getEmail(),
            'nom'       => $this->getNom(),
            'prenom'    => $this->getPrenom(),
            'photo'     => $this->getPhoto(),
            'mdp'       => $this->getMdp(),
            'profil'    => $this->getProfil()
        ];
    }

    public function getId() :Int 
    {
        return $this->id;
    }
    public function setId(Int $id) :Self 
    {
        $this->id = $id;
        return $this;
    }

    public function getPseudo() :String 
    {
        return $this->pseudo;
    }
    public function setPseudo(String $pseudo) :Self
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function getEmail() :string
    {
        return $this->email;
    }
    public function setEmail(?String $email) :Self
    {
        $this->email = $email;
        return $this;
    }

    public function getNom()  :String
    {
        return $this->nom;
    }
    public function setNom(String $nom) :Self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom() :String
    {
        return $this->prenom;
    }
    public function setPrenom(String $prenom) :Self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getPhoto() :?String
    {
        return $this->photo;
    }
    public function setPhoto(?String $photo) :Self //? Url de l'image ?
    {
        $this->photo = $photo;
        return $this;
    }

    public function getMdp() :String
    {
        return $this->mdp;
    }
    public function setMdp(String $mdp) :Self
    {
        $this->mdp = $mdp;
        return $this;
    }

    public function getProfil() :String
    {
        return $this->profil;
    }
    public function setProfil(String $profil) :Self
    {
        $this->profil = $profil;
        return $this;
    }
}