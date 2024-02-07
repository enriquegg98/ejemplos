<! -- Clases en PHP -- !>
<! -- Visibilidad de datos -- !>

<?php

class persona
{
    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre) // acciones o metodos
    {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola soy ".$this->nombre."<br/>";
    }

    public function mostrarEdad()
    {
        $this->edad = 20;
        return $this->edad;
       
    }
}

$objAlumno = new persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Luis Garcia");
$objAlumno->imprimirNombre();
echo $objAlumno->mostrarEdad();
echo "<br/>";


$objAlumno1 = new persona(); // instancia o creación de un objeto
$objAlumno1->asignarNombre("Enrique Gonzalez");
$objAlumno1->imprimirNombre();

$objAlumno2 = new persona(); // instancia o creación de un objeto
$objAlumno2->asignarNombre("Blanca Flor");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre; // imprimir una propiedad
echo "<br/>";
echo $objAlumno1->nombre; // imprimir una propiedad
echo "<br/>";
echo $objAlumno2->nombre; // imprimir una propiedad



?>