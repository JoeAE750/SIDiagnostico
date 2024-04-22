<?php
function validarBoton($boton)
{
    return (isset($boton));
}

$btnEnviar = $_POST['btnEnviar'];

if(validarBoton($btnIngresar))
{
    //Reglas
}else{
    echo "Acceso no Permitido";
}