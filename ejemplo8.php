<! -- Operadores aritmeticos -- !>

<?php

if($_POST)
{

$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

// Suma

$suma = $valorA+$valorB;

// Resta

$resta = $valorA - $valorB;

// División

$division = $valorA / $valorB;

// Multiplicación

$multiplicacion = $valorA * $valorB;

echo "Suma ".$suma;
echo "<br/>Resta ".$resta;
echo "<br/>División ".$division;
echo "<br/>Multiplicación ".$multiplicacion;

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
    <form action="ejemplo8.php" method="post">
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