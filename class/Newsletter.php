<?php 

class Newsletter {
    private $email;

    function __toString() {
        return "[email] -> " . $this->email;
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
}