 <?php

    if($_POST)
    {
        $txtNombre=$_POST['txtNombre'];
        $txtApellido=$_POST['txtApellido'];
        $numEdad=$_POST['numEdad'];

        echo "Hola ".$txtNombre.", tu apellido es ".$txtApellido." y tienes ".$numEdad." años";

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
<form action="ejemplo5.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <br/>
        Edad:
        <input type="text" name="numEdad" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>