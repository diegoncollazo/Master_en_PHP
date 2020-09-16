<?php
$nombre = "Diego Collazo";
var_dump($nombre);
echo "<br/>";

// Fechas
echo "<hr/>";
echo date('D d.m.yy');
echo "<br/>";
echo time();
echo "<br/>";

// Matematicas
echo "<hr/>";
echo "Raíz cuadrada de 9: ".sqrt(9);
echo "<br/>";

echo "Número aleatorio entre 10 y 40: ".rand(10, 40);
echo "<br/>";

echo "Número Pi: ".pi();
echo "<br/>";

echo "Redondear: ".round(7.899752, 2);
echo "<br/>";

// Generales
echo "<hr/>";
echo gettype($nombre);
echo "<br/>";
echo is_string($nombre);
echo "<br/>";
echo !is_float($nombre);
echo "<br/>";
if(isset($nombre)){
    echo "Existe la variable";
}
else{
    echo "No existe la variable";
}
echo "<br/>";

// Limpiar espacios
$frase = "    Una frase      ";
var_dump(trim($frase));
echo "<br/>";

// Borrar variables (destruir)
$year = 2020;
unset($year);
// var_dump($year);

// Comprobar variable vacia
echo "<br/>";
$texto = "";
echo empty($texto);

// Contador de caracteres 
echo "<br/>";
echo strlen($nombre);
echo "<br/>";
echo strpos($nombre, "Col");
echo "<br/>";
echo str_replace("Diego", "Nicolas", $nombre);
echo "<br/>";
echo strtolower($nombre);
echo "<br/>";
echo strtoupper($frase);

?>