<?php

class Bombilla {

    private $potencia;
    static $numBombillas = 0;

    public function __construct() {
        $this->potencia = 10;
        self::$numBombillas++;
    }

    public function __destruct() {
        self::$numBombillas--;
        echo "Número de bombillas: " . self::$numBombillas . "\n";
    }

    public function setPotencia($potencia) {
        if ($potencia < 2) {
            $this->potencia = 2;
            throw new Exception("La potencia no puede ser menor de 2W");
        } elseif ($potencia > 35) {
            $this->potencia = 35;
            throw new Exception("La potencia no puede ser mayor de 35W");
        } else {
            $this->potencia = $potencia;
        }
    }

    public function getPotencia() {
        return $this->potencia;
    }

    public function aumentaPotencia() {
        if ($this->potencia == 35) {
            throw new Exception("La potencia no puede ser mayor de 35W");
        } else {
            $this->potencia += 10;
        }
    }

    public function bajaPotencia() {
        if ($this->potencia == 2) {
            throw new Exception("La potencia no puede ser menor de 2W");
        } else {
            $this->potencia -= 10;
        }
    }
}

try {
    $bombilla = new Bombilla();
    echo "Potencia inicial: " . $bombilla->getPotencia() . "W\n";
    echo "Número de bombillas: " . Bombilla::$numBombillas . "\n";

    $bombilla->setPotencia(20);
    echo "Potencia después de cambiar: " . $bombilla->getPotencia() . "W\n";

    $bombilla->aumentaPotencia();
    echo "Potencia después de aumentar: " . $bombilla->getPotencia() . "W\n";

    $bombilla->bajaPotencia();
    echo "Potencia después de disminuir: " . $bombilla->getPotencia() . "W\n";

    $bombillanova = new Bombilla();
    echo "Número de bombillas: " . Bombilla::$numBombillas . "\n";

    unset($bombilla);
    echo "Número de bombillas: " . Bombilla::$numBombillas . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}