<?php
function tabla($numero){
    echo "<h3>Tabla de multiplicar del número: $numero </h3>";
    for ($i=1; $i <= $numero ; $i++) { 
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion</br>";

    }
}
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}
else
{
    echo "<h2>No existe número para sacar la tabla.</h2>"; 
}
// Parametros opcionales.
function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena = "";


    if ($negrita){
        $cadena .= "<h1>";
    }

    $cadena .=  "Suma: $suma <br/>";
    $cadena .=  "Resta: $resta <br/>";
    $cadena .=  "Producto: $producto <br/>";
    $cadena .=  "División: $division <br/>";

    if ($negrita){
        $cadena .=  "</h1>";
    }

    return $cadena;
}

echo calculadora(20, 10, true);
echo calculadora(20, 10);

// Funcion dentro de otra funcion
function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

// Con retorno
function nombre($nombre, $apellidos){
    $texto = getNombre($nombre)
        ."<br/>".
        getApellidos($apellidos)
    ;
    return $texto;
}

echo nombre("Diego", "Collazo");

?>