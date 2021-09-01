<?php
$cantidad = $_POST["numero"];

$nums1=array();

for ($i=0; $i<$cantidad ; $i++) { 
    $nums1[$i]=rand(1,$cantidad);
}
//$suma=0;
for ($i=0; $i < $cantidad ; $i++) { 
    echo $nums1[$i].',';
    //$suma+=$nums[$i];
}

$cArray = count($nums1);
$tSuma = suma($nums1);


function suma($nums1){
    return array_sum($nums1);
}

function minimo($nums1){
    return min($nums1);
}

function maximo($nums1){
    return max($nums1);
}

$cuenta = array_count_values($nums1);
arsort($cuenta);
print_r($nums1);



echo "<br>";
echo $cArray;
echo "<br>";
echo suma($nums1);
echo "<br>";
echo $tSuma;
echo "<br>";
echo "El valor ,más bajo que se puede encontrar en los numeros gernerados es ". minimo($nums1);
echo "<br>";
echo "El valor maximo que se puede encontrar en los numeros gernerados es ". maximo($nums1);
?>