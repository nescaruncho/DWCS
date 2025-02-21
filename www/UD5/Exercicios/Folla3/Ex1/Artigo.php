<?php

class Artigo
{
    private $id;
    private $nome;

    public function __construct($id, $nome)
    {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function __clone()
    {
        $this->id = $this->id + 1;
        $this->nome = $this->nome . " (copia)";
    }

    public function __set($atributo, $valor)
    {
        if (property_exists(__CLASS__, $atributo)) {
            $this->$atributo = $valor;
        } else {
            echo "A propiedade $atributo non existe";
        }
    }

    public function __get($atributo)
    {
        if (property_exists(__CLASS__, $atributo)) {
            return $this->$atributo;
        } else {
            return null;
        }
    }

    public function mostraArtigo()
    {
        return "Id: $this->id, Nome: $this->nome \n";
    }

    public function __tostring()
    {
        return $this->mostraArtigo();
    }
}

$pantalla = new Artigo(1, "Pantalla");
echo $pantalla->__tostring();
$rato = clone $pantalla;
echo $rato->__tostring();
$rato->__set("nome", "Rato");
echo $rato->__tostring();

