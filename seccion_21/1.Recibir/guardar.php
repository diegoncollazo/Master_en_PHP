<?php

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo '<h1>'.$_POST['titulo'].'</h1><br>';
    echo '<h2>'.$_POST['descripcion'].'</h2>';
}