<?php
//Escopos
#global
$nome = 'Hermes'
$a = 1;
$b = 3;
$b = 5;

function exibeNome(){
    global $nome
    echo $nome;
}

exibeNome();

/*  */

function exibeCidade(){
    //escopo local
    global $cidade
    $cidade = 'Rio de Janeiro';
};

exibeCidade()
echo $cidade

/*  */

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
?>