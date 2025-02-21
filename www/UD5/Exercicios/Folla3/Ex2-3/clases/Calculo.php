<?php

abstract class Calculo
{
    public $operando1;
    public $operando2;
    public $resultado;

    public function setOperando1($operando1)
    {
        $this->operando1 = $operando1;
    }

    public function setOperando2($operando2)
    {
        $this->operando2 = $operando2;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public abstract function calcula();
}