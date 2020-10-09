<?php
function mostrarArray($array){
    $retorno = "";
    foreach ($array as $valor) {
        $retorno .= $valor."<br>";
    }
    return $retorno;
}

$array = array();

for ($i=0; $i < 120; $i++) { 
    array_push($array, "Elemento: ".($i+1));
}

echo mostrarArray($array);