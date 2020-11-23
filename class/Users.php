<?php 

class Users {
    private $id;
    private $pseudo;
    private $email;
    private $nom;
    private $prenom;
    private $photo;
    private $mdp;
    private $profil;
    
    function toString(){
        return 
        $this->id;
        $this->pseudo;
        $this->email;
        $this->nom;
        $this->prenom;
        $this->photo;
        $this->mdp;
        $this->profil;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getProfil()
    {
        return $this->profil;
    }

    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}