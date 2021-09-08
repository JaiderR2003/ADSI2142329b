<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bibliotecas </title>
</head>
<body>
<center>
<?php 

include_once ('InicioLibros.php');

include_once ('InicioRevistas.php');

class Biblioteca{

    protected $coleccion;

    //metodos

    function __construct(){
        $this->coleccion=array();
    }   

    function adicionar($material){
        array_push($this->coleccion, $material);
    }

    function verMaterialesL(){
        for ($i=0; $i < count($this->coleccion) ; $i++) { 
            echo $this->coleccion[$i]->Mostrarclase();
            echo $this->coleccion[$i]->MostrarLibro();
        }
    }
    
    function verMaterialesR(){
        for ($i=0; $i < count($this->coleccion) ; $i++) { 
            echo $this->coleccion[$i]->MostrarRevista();
        }
    }
}

//AGREGAR LIBRO

$biblio=new Biblioteca();
$li3=new Libro('Madrid: RA-MA Editorial', 'Programación', 'I0089', 'Ceballos Sierra', 'Programación Orientada a Objetos en c++', '2018', 'Activo');


echo "<h1> LIBROS QUE TE PUEDEN INTERESAR </h2>";

//$biblio->adicionar($li);
echo "<br>";
echo ('<img src="Imagenes/icon_book.png">');
$biblio->adicionar($li3);

$biblio->verMaterialesL();

echo "<br>";


//AGREGAR REVISTA

$biblio2=new Biblioteca();
$re3=new Revista('Programación', 'R9088', 'Visantino Lejano', 'Revista Virtual Pro', '2011', 'Activo');

echo "<h1> REVISTAS INTERESANTES </h2>";

//$biblio2->adicionar($re);

echo "<br>";
echo ('<img src="Imagenes/revista.jpg">');
$biblio2->adicionar($re3);

$biblio2->verMaterialesR();
?>
</center>
</body>
</html>
