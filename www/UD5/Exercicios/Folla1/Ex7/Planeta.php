<?php

class Planeta
{
    //PROPIEDADES
    public $nome;
    public $tamaño;
    public bool $accesible;
    public $distancia; 
    public static $numPlanetasAccesibles = 0;

    //MÉTODOS
    public function __construct($nome, $tamaño, $accesible, $distancia)
    {
        $this->nome = $nome;
        $this->tamaño = $tamaño;
        $this->accesible = $accesible;
        $this->distancia = $distancia;

        if ($this->accesible == true) {
            self::$numPlanetasAccesibles++;
        }
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTamaño()
    {
        return $this->tamaño;
    }

    public function setTamaño($tamaño)
    {
        $this->tamaño = $tamaño;
    }

    public function getAccesible()
    {
        if ($this->accesible == true) {
            return "é accesible";
        } else {
            return "non é accesible";
        }
        
    }

    public function setAccesible($accesible)
    {
        $this->accesible = $accesible;
    }

    public function getDistancia()
    {
        return $this->distancia;
    }

    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;
    }

    // public function getNumPlanetasAccesibles()
    // {
    //     echo "Hai " . self::$numPlanetasAccesibles . " planetas accesibles\n";
    // }

    public function explotou()
    {
        if ($this->accesible == true) {
            self::$numPlanetasAccesibles--;
        }
        $this->accesible = false;
        echo "O planeta " . $this->nome . " explotou\n";
    }
}

class PlanetaHabitable extends Planeta
{
    //PROPIEDADES
    public $numeroPersoas;
    public $tempMin;
    public $tempMax;

    //MÉTODOS
    public function __construct($nome, $tamaño, $accesible, $distancia, $numeroPersoas, $tempMin, $tempMax)
    {
        parent::__construct($nome, $tamaño, $accesible, $distancia);
        $this->numeroPersoas = $numeroPersoas;
        $this->tempMin = $tempMin;
        $this->tempMax = $tempMax;
    }

    public function setNumeroPersoas($numeroPersoas)
    {
        $this->numeroPersoas = $numeroPersoas;
    }

    public function getNumeroPersoas()
    {
        return $this->numeroPersoas;
    }

    public function setTempMin($tempMin)
    {
        $this->tempMin = $tempMin;
    }

    public function getTempMin()
    {
        return $this->tempMin;
    }

    public function setTempMax($tempMax)
    {
        $this->tempMax = $tempMax;
    }

    public function getTempMax()
    {
        return $this->tempMax;
    }

    public function listaTodo()
    {
        echo "O planeta habitable " . $this->nome . " con tamaño " . $this->tamaño . " soles " . $this->getAccesible() . " e está a ". $this->distancia ." anos luz de distancia. Ten unha poboación de " . $this->numeroPersoas . " habitantes, temperatura mínima de " . $this->tempMin . "º e temperatura máxima de " . $this->tempMax . "º.\n";
    }
}

class PlanetaHostil extends Planeta
{

    //PROPIEDADES
    private bool $vida;
    private bool $fontesEnerxia;

    //MÉTODOS
    public function __construct($nome, $tamaño, $accesible, $distancia, $vida, $fontesEnerxia)
    {
        parent::__construct($nome, $tamaño, $accesible, $distancia);
        $this->vida = $vida;
        $this->fontesEnerxia = $fontesEnerxia;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }

    public function getVida()
    {
        if ($this->vida == true) {
            return "ten vida";
        } else {
            return "non ten vida";
        }
    }

    public function setFontesEnerxia($fontesEnerxia)
    {
        $this->fontesEnerxia = $fontesEnerxia;
    }

    public function getFontesEnerxia()
    {
        if ($this->fontesEnerxia == true) {
            return "ten fontes de enerxía";
        } else {
            return "non ten fontes de enerxía";
        }
        
    }

    public function listaTodo()
    {
        echo "O planeta hostil " . $this->nome . " con tamaño " . $this->tamaño . " soles e a unha distancia de " . $this->distancia . " anos luz " . $this->getAccesible() . ", " . $this->getVida() . " e " . $this->getFontesEnerxia() . ".\n";
    }
}

$planetaFion = new PlanetaHabitable("Fion", 24, true, 1.5, 1000000, 0, 10);
$planetaFion->listaTodo();

$planetaKaleva = new PlanetaHostil("Kaleva", 50, false, 0.4, true, true);
$planetaKaleva->listaTodo();

echo "Hai " . Planeta::$numPlanetasAccesibles . " planeta(s) accesible(s)\n";

$planetaNovo = new PlanetaHabitable("Novo", 30, true, 2, 500000, 5, 20);
$planetaNovo->listaTodo();

echo "Hai " . Planeta::$numPlanetasAccesibles . " planeta(s) accesible(s)\n";

$planetaNovo->explotou();

echo "Hai " . Planeta::$numPlanetasAccesibles . " planeta(s) accesible(s)\n";