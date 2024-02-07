<! -- Leer arreglos en php -- !>

<?php

$frutas1 = array ("fresa", "pera", "manzana", "mango");
print_r($frutas1);

echo "<br/>";

$frutas = array("f"=>"fresa","p"=>"papaya","m"=>"mango");
print_r($frutas);

echo "<br/> ".$frutas1[2];
echo "<br/> ".$frutas["f"];

echo "<br/>";

for($indice = 0; $indice < 4; $indice++)
{
    echo $frutas1[$indice]."<br/>";
}

echo "<br/>";

foreach($frutas as $indice=>&$valor)

{
    echo "El valor ".$valor."Tiene el indice: ".$indice."<br/>";
   
    echo $frutas[$indice]."<br/>";
}
?> 