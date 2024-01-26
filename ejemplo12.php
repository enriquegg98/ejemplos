<! -- If else PHP -- !>

<?php

if($_POST)
{

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

	if($valorA != $valorB)
	{
		echo "El valor de A es diferente a B";
	}else{
        echo "El valor de A es igual a B";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejemplo12.php" method="post">
	Valor A:
        <input type="text" name="valorA" id="">
	<br/>
	Valor B:
	<input type="text" name="valorB" id="">
	<br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
