<! -- Función para JSON decode -- !>

<?php

$jsonContenido = 
'[
    
{"nombre":"Osca", "apellido":"Uh"},
{"nombre":"Luis", "apellido":"Garcia"}

]';

$resultado = json_decode($jsonContenido);

foreach ($resultado as $persona)
{
    echo ($persona->nombre)." ".($persona->apellido)."<br/>";
}

?>