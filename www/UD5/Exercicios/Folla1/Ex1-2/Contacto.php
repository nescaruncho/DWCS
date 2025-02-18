<?php

class Contacto
{
    //Propiedades
    private $nombre;
    private $apellidos;
    private $telefono;

    //Constructor
    public function __construct($nombre,$apellidos,$telefono) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
    }

    //Metodos
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = ucwords($nombre);
    }

    public function getApellidos() {
        return $this->apellidos;
    }
    public function setApellidos($apellidos) {
        $this->apellidos = ucwords($apellidos);
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        if (preg_match('/^[0-9]{9}$/', $telefono)) {
            $this->telefono = $telefono;
        } else {
            throw new Exception("Número de teléfono incorrecto");        }
    }

    public function mostrarInformacion() {
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellidos: ".$this->apellidos."<br>";
        echo "Teléfono: ".$this->telefono."<br>";
    }

    public function __destruct() {
        echo "Se ha destruido el contacto de ".$this->nombre." ".$this->apellidos.".";
    }
}

$contacto1 = new Contacto("pepe","perez","981456789");
$contacto2 = new Contacto("juan","gomez","987654321");
$contacto3 = new Contacto("luis","fernandez","654987321");

$contacto1->getNombre();
$contacto1->getApellidos();
$contacto1->getTelefono();

$contacto2->getNombre();
$contacto2->getApellidos();
$contacto2->getTelefono();

$contacto3->getNombre();
$contacto3->getApellidos();
$contacto3->getTelefono();

$contacto1->mostrarInformacion();
$contacto2->mostrarInformacion();
$contacto3->mostrarInformacion();