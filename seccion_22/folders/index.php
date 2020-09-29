<?php
// Crear
if (!is_dir('carpeta')){
    mkdir('carpeta', 0777) or die('No se puede crear la carpeta');
}
else{
    echo 'Ya existe la carpeta';
}

// Borrar
// rmdir('carpeta');
echo '<hr>';
if($gestor = opendir('./carpeta')){
    while(false != ($archivo = readdir($gestor))){
        if ($archivo != '.' && $archivo != '..')
            echo $archivo."<br>";
    }
}