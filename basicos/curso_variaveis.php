<?php
$nome = 'Hermes';
$idade = 20;
$altura = 1.90;

echo "Meu nome é: $nome";
echo "Minha idade é: $idade";
echo "Minha altura é: $altura";


//
$nome = 'Jorge da Silva';
$idade = 21;
$altura = 1.73;

echo "Meu nome é: $nome";
echo "Minha idade é: $idade";
echo "Minha altura é: $altura";

//regras de variaveis
#tem que colocar $ antes
#pode qlqr padrão (camelCase, com _)
#não pode começar com números ou caracteres especiais
#é case sensitive

//variaveis variaveis?
$bebida = 'refrigerante';

$$bebida = 'guarana';

#esse echo vai mostrar guarana, pq fez uma troca maluca de variavel ai
echo $refrigerante; 

$destino = 'cidade';
$$destino = 'franca';

#vai mostrar franca
echo $cidade; 

//test 1
$dev = 'Programação';
$$dev = 'PHP';
echo "Ele estuda $dev. <br>";
echo "Trabalha com uma linguagem chamada $Programação <br>";
echo "<hr>";

?>