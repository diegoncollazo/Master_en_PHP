<?php
function mostrarArray($numeros){
    $retorno = "";
    foreach ($numeros as $numero) {
        $retorno .= "Número: $numero <br>";
    }
    return $retorno;
}

$numeros = array(71,4,7,10,8,3,25,9);

foreach ($numeros as $key => $value) {
    echo "Número en el indice $key: $value <br>";
}
echo '<hr>';

sort($numeros);
echo "Ordenados:<br>".mostrarArray($numeros);
echo '<hr>';

echo "Cantidad de números: ".count($numeros);
echo '<hr>';

if(isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
    $retorno = array_search($busqueda, $numeros);
    if ($retorno != false)
        echo "Número $numeros[$retorno] en indice $retorno.";
    else
        echo "No se encontró el numero.";
}

