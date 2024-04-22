<?php
function validarBoton($boton)
{
    return (isset($boton));
}

$btnEnviar = $_POST['btnEnviar'];

if(validarBoton($btnEnviar))
{
    //Reglas
}else{
    echo "Acceso no Permitido";
}