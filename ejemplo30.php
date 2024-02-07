<! -- Leer datos de mysql con php -- !>

<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "Soacha2024*";

try
{
    $conexion = new PDO("mysql:host=$servidor; dbname=album", $usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql = "SELECT * FROM `fotos`";  // forma de consultar datos con la BD

    $sentencia  = $conexion->prepare($sql); // preparo la conexión
    $sentencia->execute(); // se ejecuta la conexión

    $resultado = $sentencia->fetchAll(); // Obtengo los resultados

    // print_r($resultado); // se leen los resultados con un print_r

    foreach($resultado as $foto) // se leen los resultados con un foreach
    {
        // print_r($foto);
        echo ($foto['nombre']."<br/>");
    }
    
    echo "Conexión exitosa";
}
catch (PDOException $error)
{
    echo "Conexión erronea".$error;
}

?>
