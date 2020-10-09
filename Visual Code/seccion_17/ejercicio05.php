<?php

// include accion.php;

$tabla = array(
    "Accion" => array("GTA V", "Call of Duty", "PUGB"),
    "Aventura" => array("Assasins Creed", "Crash Bandicoot","Prince of Persia"),
    "Deportes" => array("FIFA 19", "PES 2019", "Moto GP 2019")
);

$categorias = array_keys($tabla);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <table border="2">
        <?php require_once 'ejercicio05/encabezados.php'; ?>
        <?php require_once 'ejercicio05/fila1.php'; ?>
        <?php require_once 'ejercicio05/fila2.php'; ?>
        <?php require_once 'ejercicio05/fila3.php'; ?>
    </table>
</body>
</html>