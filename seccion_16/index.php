<?php

$peliculas = array('Batman','Spider-Man','The Avengers');

//Array asociativo.
$asociativos = array(
    'nombre' => 'Diego',
    'apellido' => 'Collazo',
    'web' => 'diegoncollazo.blogspot.com'
);
echo $asociativos['apellido'].'<br>';
// $_GET es array asociativo.
var_dump($_GET);

echo "<h1>Listado de peliculas:</h1><br>";

for($i = 0; $i < count($peliculas); $i++) { 
    echo $peliculas[$i]."<br>";
}
echo "<hr>";
foreach ($peliculas as $key => $value) {
    echo $value."<br>";
}

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com'
    )
);
//echo $contactos[1]['nombre'];

foreach($contactos as $key => $contacto){
    echo $contacto['nombre'].'<br>';
}