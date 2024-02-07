<! -- Phpmyadmin crear base de datos, se hace desde phpmyadmin -- !>
<! -- Conexión php con mysql -- !>
<! -- Insertar datos en mysql con php -- !>

<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "Soacha2024*";

try
{
    $conexion = new PDO("mysql:host=$servidor; dbname=album", $usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    $conexion->exec($sql);
    
    echo "Conexión exitosa";
}
catch (PDOException $error)
{
    echo "Conexión erronea".$error;
}

?>
