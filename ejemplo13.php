<! -- Cómo usar switch en PHP -- !>

<?php

if($_POST)
{
    $boton = $_POST['btnValor'];

    switch($boton)
    {
        case 1: // El switch se compone por case
        echo "El usuario preciono 1";
        break; // El break corta la evaluación

        case 2:
        echo "El usuario preciono 2";
        break; 

        case 3:
        echo "El usuario preciono 3";
        break; 

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejemplo13.php" method="post">

        <input type="submit" name="btnValor" value="1">
        <br/>
        <input type="submit" name="btnValor" value="2">
        <br/>
        <input type="submit" name="btnValor" value="3">

    </form>
</body>
</html>