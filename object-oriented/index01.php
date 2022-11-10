<?php
/* Aula 01 */

class Pessoa
{
  public $nome;
  public $idade;

  public function Falar()
  {
    echo $this->nome . " de " . $this->idade . " anos acabou de falar. <br>";
  }
}

$hermes = new Pessoa();
$hermes->nome = "Hermes";
$hermes->idade = 20;
$hermes->Falar();
