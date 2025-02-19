<?php

class Resta extends Calculo
{
    public function calcula()
    {
        return $this->resultado = $this->operando1 - $this->operando2;
    }
}