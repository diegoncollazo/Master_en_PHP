<?php

$peliculas = array('Batman','Spider-Man','The Avengers','American Pie');
$numeros = array(1,2,5,7,8);

// Ordenar
asort($peliculas);
arsort($peliculas);
var_dump($peliculas);
echo '<hr>';

sort($numeros);
var_dump($numeros);
echo '<hr>';

// Añadir elementos
$peliculas[] = "The mommie";
array_push($peliculas, 'The Matrix');

/* Eliminar elementos */
// Elimina el ultimo
array_pop($peliculas);
// Borra por indice
unset($peliculas[2]);

// Aleatorio
$indice = array_rand($peliculas);
echo $peliculas[$indice];
echo '<hr>';

// Reverso
var_dump(array_reverse($numeros));
echo '<hr>';

// Buscar elementos
$resultado = array_search('Batman',$peliculas);
echo $resultado;
echo '<hr>';

// Contar elementos
echo count($numeros);
echo '<br>';
echo sizeof($numeros);