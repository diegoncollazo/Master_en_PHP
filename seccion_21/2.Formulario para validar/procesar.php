<?php
$error = false;
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad'])
    && !empty($_POST['email']) && !empty($_POST['pass']))
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    // Valido que el NOMBRE(s) tenga los caracteres correctos.
    if (!is_string($nombre) || !preg_match("/[A-Za-z ]+/", $nombre)){
        $error = "nombre";
    }
    // Valido que el APELLIDO(s) tenga los caracteres correctos.
    if (!is_string($apellido) || !preg_match("/[A-Za-z ]+/", $apellido)){
        $error = "apellido";
    }
    // Valido que la EDAD se encuentre entre 1 y 120.
    // !is_int($edad) || 
    if (filter_var($edad, FILTER_VALIDATE_INT, 
        array("options" => array("min_range" => 1, "max_range" => 120))) === false){
        $error = "edad";
    }
    // Valido que el CORREO tenga los caracteres correctos.
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "email";
    }
    // Valido que la CONTRASEÑA tenga una cantidad minima de caracteres.
    if (strlen($pass) < 5){
        $error = "pass";
    }
}
else
{
    $error = true;
}
if ($error != false)
    header("Location:index.php?error=$error");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Procesar documento PHP</title>
    </head>
    <body>
        <h1>Datos cargados correctamente</h1>
        <?php if ($error == false): ?>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>
