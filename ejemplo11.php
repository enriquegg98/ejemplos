<! -- If anidado PHP -- !>

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

if($valorA == $valorB){
    echo "<br/>El valor de A es igual al valor de  B <br/>"; 

    if ($valorA ==4)
    {
        echo "El valor de A es 4 <br/>";
    }

    if($valorB == 5)
    {
        echo "El valor de B es 5";
    }
}

if (($valorA == $valorB) && ($valorA == 4))
{
    echo "El valor de A es igual a B y es un numero 4";
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
    <form action="ejemplo11.php" method="post">
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