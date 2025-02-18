<?php

class Empregado
{
    //PROPIEDADES
    public $nome;
    public $salario;
    public static $numEmpregados = 0;
    //MÉTODOS
    public function __construct($nome, $salario)
    {
        $this->nome = $nome;

        if ($this->salario > 2000) {
            throw new Exception("O salario non pode ser superior a 2000€");
        } else {
           $this->salario = $salario;
        }
        
        self::$numEmpregados++;
    }

    public function asignaNome($nomeIndicado)
    {
        $this->nome = $nomeIndicado;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getSalario() 
    {
        return $this->salario;
    }

    public function __destruct()
    {
        echo "<br>obxecto de nome " . $this->nome . " foi destruído<br>";
    }
}

// CLASE OPERARIO FILLA DE EMPREGADO:
class Operario extends Empregado
{
    private $turno;
    public function __construct($nome,$salario,$turno)
    {
        parent::__construct($nome,$salario);  //EXECÚTASE PRIMEIRO O CONSTRUTOR DE EMPREGADO
        if ($this>$turno == "diurno" || $this->turno == "nocturno") {
            $this->turno = $turno;
        } else {
            throw new Exception("O turno ten que ser diurno ou nocturno");
        }
    }

    public function __destruct()
    {
        parent::__destruct();  //EXECÚTASE O CONSTRUTOR DE EMPREGADO
    }
    public function getTurno()
    {
        return $this->turno;
    }
    public function setTurno($turnoEnviado)
    {
        if ($turnoEnviado == "diurno" || $turnoEnviado == "nocturno")
            $this->turno = $turnoEnviado;
    }
}
$miguel = new Empregado("Miguel", 1500);
$ana = new Empregado("Ana", 1800);
echo "os novos empregados son " . $miguel->nome . " e " . $ana->getNome() . "<br>";
$pedro = new operario("Pedro", 1900, "nocturno");
echo "O operario ", $pedro->getNome(), " ten o turno " . $pedro->getTurno() . "<br>";
//USAMOS O MÉTODO getNome() DA CLASE NAI
echo "O operario ", $pedro->getNome(), " ten o turno " . $pedro->getTurno() . "<br>";
echo "<br>Levamos " . Empregado::$numEmpregados . " empregados" . "<br>";