<?php
  //declarando variavel
  $nome = 'Hermes';

  //variavel de variavel
  $Hermes = 'bla bla'
  //$nome = mostra Hermes
  //$$nome = mostra bla bla

  //concatenação
  echo 'O meu nome é'.$$nome;

  if($nome == 'Hermes'){
    echo 'Verdadeiro';
  } else{
    echo 'Falso';
  }


  $idade = '26';

  // == vai retornar verdeiro (verifica valor)
  if($idade == 26){
    echo 'Verdadeiro';
  } else{
    echo 'Falso';
  }
  // === vai retornar falso, pois verifica identicidade (verifica valor e tipo)
  if($idade == 26){
    echo 'Verdadeiro';
  } else{
    echo 'Falso';
  }

  //loop for
  for($i = 0; $i <= 10; i++){
    echo $i;
    echo '<hr>'
  }

  //loop while
  $i = 0;

  while($i < 10){
    echo $i;
    echo '<hr>'
    $i++;
  }

  //função (pode chamar várias vezes
  printNumero(10);
  function printNumero($num){
    echo $num;
  }

  //classes
  class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function printNomeIdade(){
      echo $this->nome;
      echo '<br>';
      echo $this->idade;
    }
  }

  $pessoa = new Pessoa('Hermes', '20');

  $pessoa->printNomeIdade();

  //array

  $arr = ['Hermes', 'Bidu', 'Luna'];

  echo $arr[0];

  
?>