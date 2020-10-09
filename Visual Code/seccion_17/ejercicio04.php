<?php

$array = array();
$numero = 10;
$texto = "DNC";
$booleana = false;

if (is_integer($numero))
    echo "Es un entero";

if (is_string($texto))
    echo "Es texto";

if (is_array($array))
    echo "Es un vector";

if (is_bool($booleana))
    echo "Es boolean";
