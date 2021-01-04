<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Subiendo archivos en PHP</title>
    </head>
    <body>
        <h1>Subir imagenes</h1>
        <form action="cargar.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="Enviar archivo" />
        </form>
        <h2>Listado de imagenes</h2>
        <?php
        $gestor = opendir('./img');
            if($gestor):
                // Recorro el directorio en busca de imagenes
                while(($image = readdir($gestor)) !== false):
                    if ($image != '.' && $image != '..'):
                        echo "<img src='img/$image' width='200px'/><br>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>
