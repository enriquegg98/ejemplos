
<! -- y el cierre -->

<?php
    if($_POST){

    // Recibir información metodo POST

    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $edad=$_POST['numEdad'];

    // Imprimir información

    echo "Hola ".$nombre." ".$apellido; // con el . estoy concatenando
    echo $apellido;
    echo $edad;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejemplo2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        Apellido:
        <input type="text" name="txtApellido" id="">
        Edad:
        <input type="text" name="numEdad" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>