<?php
// Crear
$control = fopen("archivo.txt","w+");
if($control == false){
    die("No se ha podido crear el archivo.");
}

// Leer
$reader = fopen("archivo.txt", "a+");
while(!feof($reader)){
    $contenido = fgets($reader);
    echo $contenido."<br>";
}
echo $contenido;

// Agregar
fwrite($reader, "\nAgrego texto");
echo $contenido;

// Cerrar
fclose($reader);

// Copiar
copy('archivo.txt', 'archivoB.txt') or die("Error en la copia");

// Renombrar
rename('archivoB.txt', 'nabo.txt');

// Borrar
unlink('nabo.txt') or die ("No se borró");

if(file_exists("archaivo.txt")){
    echo "Archivo existente";
}
else{
    echo "Archivo no existente";
}

