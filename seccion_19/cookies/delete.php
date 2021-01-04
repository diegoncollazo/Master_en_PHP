<?php

if(isset($_COOKIE['galleta'])){
    unset($_COOKIE['galleta']);
    setcookie('galleta','', time()-1);
    echo "Se borro la cookie 'galleta'";
}
sleep(2);

header('Location: cookies.php');
echo "<br>";
?>

<a href="cookies.php">Volver atras</a>