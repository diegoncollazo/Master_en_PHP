<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Validación de formularios en PHP</title>
    </head>
    <body>
        <h1>Validar de formularios en PHP</h1>
        <form action="procesar.php" method="POST">
            <?php
                if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    switch ($error) {
                        case 1:
                            echo 
                            '<strong style="color: red">
                                No se enviaron los datos requeridos correctamente.
                            </strong>';
                            break;
                        case 'nombre':
                            echo
                            '<strong style="color: red">
                                Ingrese su(s) nombre(s) correctamente.
                            </strong>';
                            break;
                        case 'apellido':
                            echo
                            '<strong style="color: red">
                                Ingrese su(s) apellido(s) correctamente.
                            </strong>';
                            break;
                        case 'edad':
                            echo
                            '<strong style="color: red">
                                Ingrese su edad (entre 1 y 120).
                            </strong>';
                            break;
                        case 'email':
                            echo
                            '<strong style="color: red">
                                Ingrese un correo eléctronico válido.
                            </strong>';
                            break;
                        case 'pass':
                            echo
                            '<strong style="color: red">
                                Ingrese una contraseña válida (5 caracteres mínimo).
                            </strong>';
                            break;
                        default:
                            break;
                    }
                    echo '<br><br>';
                }
            ?>
            <!-- Nombre -->
            <label for="nombre">Nombre(s)</label><br />
            <input
                type="text"
                name="nombre"
                required="required"
                pattern="[A-Za-z ]+"
            /><br />
            <!-- Apellido -->
            <label for="apellido">Apellido(s)</label><br />
            <input
                type="text"
                name="apellido"
                required="required"
                pattern="[A-Za-z ]+"
            /><br />
            <!-- Edad -->
            <label for="edad">Edad</label><br />
            <input
                type="number"
                name="edad"
                value="18"
                required="required"
                pattern="[0-9]+"
            /><br />
            <!-- Correo -->
            <label for="email">Correo electrónico</label><br />
            <input type="email" name="email" required="required" /><br />
            <!-- Contraseña -->
            <label for="pass">Contraseña</label><br />
            <input type="password" name="pass" required="required" minlength="5"/><br />
            <!-- Enviar formulario -->
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
