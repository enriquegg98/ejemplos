<! -- Abrir un archivo en php --!>

<?php 

// Abriendo un archivo para leer el contenido.

$archivo = "contenido.txt";

$archivoAbierto = fopen ($archivo,"r");

$contenido = fread ($archivoAbierto,filesize($archivo));

echo $contenido;

?>