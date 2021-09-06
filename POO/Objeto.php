<?php 

include_once('Persona.php');

//notacion 

class Aprendiz extends Persona{
    private $nombre;
    private $documento;
    private $ficha;

    public function __construct($nombre, $documento, $ficha, $ciudad, $telefono){
       
        parent::__construct($ciudad, $telefono);
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->ficha=$ficha;

    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setDocumento($documento){
        $this->documento=$documento;
    }

    public function getDocumento(){
        return ($this->documento);
    }
    
    public function setFicha($ficha){
        $this->ficha=$ficha;
    }

    public function getFicha(){
        return ($this->ficha);
    }

    //SETTERS Y GETTERS COMBINADOS 

    public function setter($atributo, $valor){
        $this->$atributo=$valor;
    }

    public function getter($atributo){
        return $this->$atributo;
    }
}

$ob = new Aprendiz("Andresito", 1000786497, 2142329);

//setters

$ob -> setter("nombre", "Carlitos");
$ob -> setter("documento", "12121212");
$ob -> setter("ficha", "000000");


//Sets separados

/*$ob -> setNombre("Pepito");
$ob -> setDocumento(105456487);
$ob -> setFicha(21242345);*/

//getter

echo $ob -> getter("nombre");
echo '<br>';
echo $ob -> getter("documento");
echo '<br>';
echo $ob -> getter("ficha");
echo '<br>';
echo $ob->datos();

//gets separados

/*echo $ob -> getNombre();
echo "<br>";
echo $ob -> getDocumento();
echo "<br>";
echo $ob -> getFicha(); */


//var_dump($ob):

/*$num=10;
$real=1.5;
$cadena="Hola uwu";
$vec=[1,2,3,4,5];
var_dump($num);
echo "<br>";
var_dump($real);
echo "<br>";
var_dump($cadena);
echo "<br>";
var_dump($vec);*/


?>