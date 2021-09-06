<?php
include_once("biblioteca.php");

class Material extends biblioteca{
    private $tipoMaterial;
    private $codigo;
    private $autor;
    private $titulo;
    private $año;
    private $status;

public function __construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status){
    $this->tipoMaterial=$tipoMaterial;
    $this->codigo=$codigo;
    $this->autor=$autor;
    $this->titulo=$titulo;
    $this->año=$año;
    $this->status=$status;
}//cierre del constructor

public function getTipoMaterial(){
    return $this->tipoMaterial;
}
public function getCodigo(){
    return $this->codigo;
}
public function getAutor(){
    return $this->autor;
}
public function getTitulo(){
    return $this->titulo;
}
public function getAño(){
    return $this->año;
}
public function getStatus(){
    return $this->status;
}

//Cierre de get ----------------------------------------------------
public function setTipomaterial(){
    return $this->tipoMaterial;
} 
public function setCodigo(){
    return $this->codigo;
}
public function setAutor(){
    return $this->autor;
}
public function setTitulo(){
    return $this->titulo;
}
public function setAño(){
    return $this->año;
}
public function setStatus(){
    return $this->status;
}//cierre de set

public function datos(){
    echo  "Este es un libro de: ". $this->tipoMaterial. "<br>". " Su código es el: ". $this->codigo. "<br>". " Su autor es ". $this->autor. "<br>"." El nombre de éste es: ". $this->titulo. "<br>". " Su año de publicación es: ". $this->año. "<br>". " El estdo es: ". $this->status. "<br>"; 
}

}//cierre de la clase

class libro extends Material{
    public function libro($editorial){
        $this->editorial=$editorial;
    }//cierre funcion libro

    public function getEditorial(){
        return $this->editorial;
    }//cierre gtet

    public function setEditorial(){
        return $this->editorial;
    }
    public function datosL(){
        //$this->datos();
        echo " Su editorial es: ". $this->editorial;
    }
    
}//cierre clase libro

class revista extends Material{
    public function revista(){

    }

    public function datosR(){
        echo " Es una revista no un libro";
    }
}


?>