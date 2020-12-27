<?php

interface interfaceDestinationService {
    public function serviceAddDestination($id,string $region, String $lieu, string $image, string $petiteDescription, string $description,string $atout1, string $atout2, string $atout3,string $lien, string $extraitForum, string $idUser);
    public function serviceUpdateDestination(Int $idDestination, string $region, string $lieu, string $image, string $petiteDescription, string $description,string $atout1, string $atout2, string $atout3,string $lien, string $extraitForum, string $idUser);
}

?>