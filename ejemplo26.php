<! -- Herencia en php -- !>

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

class trabajador extends persona // extends para decir que hereda de la clase persona
{
    public $puesto; // propiedad nueva

    public function presentarseComoTrabajado() // nuevo metodo o función
    {
        echo "Hola, soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Luis Garcia"); // Llamando un metodo de la clase padre
$objTrabajador->puesto = "Ingeniero";
$objTrabajador->presentarseComoTrabajado();



?>
