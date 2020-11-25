<?php 
include_once ('Users.php');

class Helper extends User{
    private $code;
    private $facebook;
    private $linkedin;

    function __toString(){
        return "[code] -> " . $this->code .
            "[facebook] -> " . $this->facebook .
            "[linkedin] -> " . $this->linkedin;
    }
    
    public function getCode() :Int
    {
        return $this->code;
    }
    public function setCode(Int $code) :Self
    {
        $this->code = $code;
        return $this;
    }

    public function getFacebook() :String
    {
        return $this->facebook;
    }
    public function setFacebook(String $facebook) :Self
    {
        $this->facebook = $facebook;
        return $this;
    }

    public function getLinkedin() :String
    {
        return $this->linkedin;
    }
    public function setLinkedin(String $linkedin) :Self
    {
        $this->linkedin = $linkedin;
        return $this;
    }
}