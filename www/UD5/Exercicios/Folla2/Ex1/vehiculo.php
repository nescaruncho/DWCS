<?php

class Vehiculo
{

    private $matricula;
    private $modelo;
    private $kms;

    public function __construct($matricula, $modelo, $kms)
    {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
        $this->kms = $kms;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getKms()
    {
        return $this->kms;
    }

    public function mostraEnTR()
    {
        echo "<tr>";
        echo "<td>" . $this->matricula . "</td>";
        echo "<td>" . $this->modelo . "</td>";
        echo "<td>" . $this->kms . "</td>";
        echo "</tr>";
    }

}