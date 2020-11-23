<?php 

class Helpers {
    private $code;
    private $idUser;
    private $facebook;
    private $linkedin;

    function toString(){
        return 
        $this->code;
        $this->idUser;
        $this->facebook;
        $this->linkedin;
    }
    
    public function getCode()
    {
        return $this->code;
    }
 
    public function setCode($code)
    {
        $this->code = $code;

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

    public function getFacebook()
    {
        return $this->facebook;
    }
 
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getLinkedin()
    {
        return $this->linkedin;
    }

    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }
}