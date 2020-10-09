<?php
    $resultado = false;
    if (isset($_POST['numero1']) && isset($_POST['numero2'])){
        $numero1 =  $_POST['numero1'];
        $numero2 =  $_POST['numero2'];
        if (isset($_POST['sumar']))
            $resultado = "El resultado de la suma es: ".($numero1 + $numero2);
        elseif (isset($_POST['restar']))
            $resultado = "El resultado de la resta es: ".($numero1 - $numero2);
        elseif (isset($_POST['multiplicar']))
            $resultado = "El resultado de la multiplicacion es: ".($numero1 * $numero2);
        elseif (isset($_POST['dividir']))
            $resultado = "El resultado de la division es: ".($numero1 / $numero2);
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Calculadora en PHP</title>
    </head>
    <body>
        <h1>Calculador en PHP</h1>
        <form action="ejercicio03.php" method="POST">
            <label for="numero1">Numero 1</label><br>
            <input type="number" name="numero1" /><br>
            <label for="numero2">Numero 2</label><br>
            <input type="number" name="numero2" /><br>
            <br />
            <input type="submit" name="sumar" value="Sumar" />
            <input type="submit" name="restar" value="Restar" />
            <input type="submit" name="multiplicar" value="Multiplicar" />
            <input type="submit" name="dividir" value="Dividir" />
            <hr>
        </form>
        <?php
            if($resultado != false):
                echo "<h2>$resultado</h2>";
            endif;
        ?>
    </body>
</html>
