<?php

include_once ('ClaseB.php');

    class Materiales{
        protected $tipoMaterial;
        protected $codigo;
        protected $autor;
        protected $titulo;
        protected $año;
        protected $status;

        public function __construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status){
            $this->tipoMaterial=$tipoMaterial;
            $this->codigo=$codigo;
            $this->autor=$autor;
            $this->titulo=$titulo;
            $this->año=$año;
            $this->status=$status;
        }

        public function setterM($atributo, $valor){
            $this->$atributo=$valor;
        }

        public function getterM($atributo){
            return $this->$atributo;
        }

        public function Mostrarclase(){
            echo "<p style='font-size: 22px'> El nombre del libro es: <b>".$this->titulo. "</b>. <br> Fué escrito por: <b>".$this->autor. "</b>. <br> El genero del libro es: <b>".$this->tipoMaterial. "</b>.  <br> Se publicó en el año: <b>".$this->año. "</b>.  <br> Su codigo es: <b>".$this->codigo. "</b>. <br> Su estado es: <b>".$this->status."</b></p>.";
        }
    }

    //herencia desde materiales

    class Libro extends Materiales{
        private $editorial;
    
        public function __construct($editorial, $tipoMaterial, $codigo, $autor, $titulo, $año, $status){
            parent::__construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status);
            $this->editorial=$editorial;
        }
    
        public function setterL($atributo, $valor){
            $this->$atributo=$valor;
        }
    
        public function getterL($atributo){
            return $this->$atributo;
        }
    
        public function MostrarLibro(){
            echo "<p style='font-size: 20px'>Lugar y  editorial <b>".$this->editorial."</b>.</p><br>";
        }
    }

    //herencia desde materiales

    class Revista extends Materiales{
    
        public function __construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status){
            parent::__construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status);
        }
    
        public function setterR($atributo, $valor){
            $this->$atributo=$valor;
        }
    
        public function getterR($atributo){
            return $this->$atributo;
        }
    
        public function MostrarRevista(){
            echo "<p style='font-size: 22px'> El nombre de la revista es: <b>".$this->titulo. "</b>. <br> Fué escrito por: <b>".$this->autor. "</b>. <br> El genero al que pertenece esta revista es: <b>".
            $this->tipoMaterial. "</b>.  <br> Se publicó en el año: <b>".$this->año. "</b>.  <br> Su codigo es: <b>".$this->codigo. "</b>. <br> Su estado es: <b>".
            $this->status."</b></p>.";
        }
    }
?>