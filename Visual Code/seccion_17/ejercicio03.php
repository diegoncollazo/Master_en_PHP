<?php

$texto = "";

if(empty($texto)){
    $texto = "variable vacia";
    $texto = strtoupper($texto);
    echo "<strong>$texto</strong>";
}
else
    echo "Variable sin texto";