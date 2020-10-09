<?php
$nombre = "Diego Collazo";
$edad = 17;
$mayoria_edad = 18;

goto marca;

if ($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor edad </h1>";
}
else {
    echo "<h2>$nombre no es mayor edad </h2>";
}

marca:
echo "<h1>Función GOTO</h1>";
if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "Suma: ".($numero1+$numero2)."</br>";
}

$contador = 1;
while ($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo "<h4>El cuadrado de $contador es $cuadrado</h4>";
    $contador++;
}

// Ejercicio 06
echo "<table border='1'><tr>"; // Inicio de la tabla
echo "<tr>"; // Inicio fila 1 de celdas
    for ($i=1; $i <= 10; $i++) { 
        echo "<td>Tabla del $i</td>";
    }
echo "</tr>"; // Cierre fila 1 de celdas
echo "<tr>"; // Inicio fila 2 de celdas
for ($i=1; $i <= 10; $i++) {
        echo "<td>";
            for($x=1; $x <= 10; $x++){
                echo "$i x $x = ".($i*$x)."<br>";
            }
        echo "</td>";
    }
echo "</tr>"; // Cierre fila 2 de celdas
echo "</table>"; // Fin de la tabla

// Ejercicio 07
if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if ($numero1 < $numero2){
        for($i=$numero1; $i <= $numero2; $i++){
            if ($i%2 == 1){
                echo "<h4>$i es impar</h4>";
            }
            else{
                echo "<h4>$i es par</h4>";
            }
        }
    }
    else
    {
        echo "<h3>El numero 1 debe ser menor que el numero 2</h3>";
    }
}
else
{
    echo "<h2>No existen los parametros.</h2>";
}