<?php 

include_once ('Objeto.php');

class Persona{
    private $ciudad;
    private $telefono;

public function __construct($ciudad, $telefono){
    $this->ciudad=$ciudad;
    $this->telefono=$telefono;
}

public function datos(){
    return "Vive en:" .$this->ciudad. "y su numero de telefono es:".$this->telefono;
}
}



?>