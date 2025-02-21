<?php

class Data
{
    private static $calendario = "Calendario gregoriano";

    public function getCalendario()
    {
        return self::$calendario;
    }

    public static function getData()
    {
        return date("d/m/Y");
    }

    public function getHora()
    {
        return date("H:i:s");
    }

    public function getDataHora()
    {
        return $this->getData() . " e son as " . $this->getHora();
    }
}

$hoxe = new Data();
echo "Usamos o calendario: " . $hoxe->getCalendario() . "\n";
echo "Hoxe é " . $hoxe->getDataHora() . "\n";