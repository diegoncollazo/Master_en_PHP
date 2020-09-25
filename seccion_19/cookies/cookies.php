<?php
if(isset($_COOKIE['galleta']))
    echo $_COOKIE['galleta'];
echo "<br>";

if(isset($_COOKIE['year']))
    echo $_COOKIE['year'];
echo "<br>";

if(isset($_COOKIE['seconds']))
    echo $_COOKIE['seconds'];
else
    echo "Se destruyo en los 10 segundos";
echo "<br>";
?>
<a href="cookie.php">Ver las cookies</a>
<a href="delete.php">Borrar las cookies</a>