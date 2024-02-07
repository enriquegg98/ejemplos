<! -- Variables de session php -- !>

<?php

session_start();

$_SESSION["usuario"] = "lucho";
$_SESSION["estatus"] = "logueado";

echo "Sesión iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>