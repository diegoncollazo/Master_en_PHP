<?php
session_start();

$variable = "Variable normal";

$_SESSION['persistente'] = "Variable persistente";

echo $variable;
echo "<br>";
echo $_SESSION['persistente'];