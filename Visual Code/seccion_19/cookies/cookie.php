<?php

setcookie("galleta", "Rica galleta");

// Caduca en un año
setcookie("year","24092020", time()+(60*60*24*365));

// Caduca en 10 segundos
setcookie("seconds","10", time()+(10));
?>

<a href="cookies.php">Contenido en las cookies</a>