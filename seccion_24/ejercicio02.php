<?php
    function ValidarCorreo($correo){
        $retorno = false;
        if (is_string($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL))
            $retorno = true;
        return $retorno;
    }

    if (isset($_GET['correo']) && ValidarCorreo($_GET['correo']))
        echo "Correo eléctronico valido: ".$_GET['correo'];
    else
        echo "Correo eléctronico inválido";
?>
