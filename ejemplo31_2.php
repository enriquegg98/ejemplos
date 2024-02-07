<! -- Destruir variables de session en php 3:34:57 -- !>


<?php


session_start();
session_destroy();

echo "Se destruyo la sesión de usuario";

?>