<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Formulario HTML</title>
    </head>
    <body>
        <h1>Formulario HTML</h1>
        <form action="guardar.php" method="POST">
            Titulo:<br />
            <input type="text" name="titulo" /><br />
            Descripcion:<br />
            <textarea name="descripcion"></textarea><br />
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
