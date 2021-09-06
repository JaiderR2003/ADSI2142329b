<?php
include_once("objeto.php");

$objMaterial=new Material ("Terror", "E513", "Howard Phillips Lovecraft", "LOS MITOS DE CTHULHU", 1998, "DISPONIBLE");
$libro =new libro ("COMCOSUR");

$objJavaScript=new Material ("LENGUAJES DE PROGRAMACIÓN", "lJ01", "David Sawyer McFarland", "JavaScript", 001, "DISPONIBLE");
$LibroJavaScript=new libro ("Anaya Multimedia");

$objRevista=new Material ("Formación", "rF01", "Aldana Cárdenas", "Formación profesional y desarrollo: revista del SENA", 100, "NO DISPONIBLE");
$revistaFormacion=new revista ("");

echo "<center>";
echo ('<img src="image/libro.png">');
echo "<br>";
$objMaterial->datos();
$libro->datosL();
echo "<br>";

echo "<br>";
echo ('<img src="image/javascript.jpg"');
echo "<br>";
echo "<br>";
$objJavaScript->datos();
$LibroJavaScript->datosL();
echo "<br>";

echo "<br>";
echo ('<img src="image/revista.png"');
echo "<br>";
echo "<br>";
$objRevista->datos();
$revistaFormacion->datosR();
?>