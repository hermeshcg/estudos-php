<?php
//tipos de dados escalares
//string :)
$nome = 'string';

var_dump($nome); #essa func mostra infos sobre a var (tipo, tamanho etc)
if(is_string($nome)):
    echo "é string";
else: 
    echo "não é string";
endif;

echo '<hr>';

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "é int";
else: 
    echo "não é int";
endif;

//float
$altura = 1.78;
var_dump($altura);
if(is_float($altura)):
    echo "é float";
else: 
    echo "não é float";
endif;

//boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "é boolean";
else: 
    echo "não é boolean";
endif;



/**Tipos de dados compostos */
//array
$carros = array('Gol', 'Uno', 'Fusca', 10, 2.3, true);
var_dump($carros);
if(is_array($carros)):
    echo "é array";
else: 
    echo "não é array";
endif;

//object
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome('Hermes');
var_dump($cliente);
if(is_object($cliente)):
    echo "é object";
else: 
    echo "não é object";
endif;

/* Compostos */
$cidade = NULL;
var_dump($cidade)
?>