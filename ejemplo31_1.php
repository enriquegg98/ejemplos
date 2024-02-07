<! -- Variables de session php -- !>

<?php

session_start();


if( isset($_SESSION["usuario"]))
{
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
}
else
{
    echo "No hay datos de sesión";
}
?>