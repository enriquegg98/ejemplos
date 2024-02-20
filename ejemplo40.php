<! -- Escritura de archivos --!>
<! -- Estructura del portafolio Web --!>

<?php

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "Hola Luis";

$archivoACrear = fopen ($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);

?>