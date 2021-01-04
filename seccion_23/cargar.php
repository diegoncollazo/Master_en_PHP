<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpg" || $tipo == "image/jpeg" 
    || $tipo == "image/png" || $tipo == "image/gif"){
    if (!is_dir('img')){
        mkdir('img', 0777);
    }
    header("Refresh: 5; URL=index.php");
    move_uploaded_file($archivo['tmp_name'], 'img/'.$nombre);
    echo "<h1>Imagen subida correctamente</h1>";
}
else{
    header("Refresh: 5; URL=index.php");
    echo "Sube una imagen en el formato indicado.";

}