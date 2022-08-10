<?php
//constantes
#são globais
define("NOME", "Hermes Caretta");
define("IDADE", 20);
define("ALTURA", 1.98);
define("CASADO", true);

echo 'Meu nome é '.NOME.'\n Minha idade é '.IDADE.'\n Minha altura é '.ALTURA;

define("TIMES", ['vasco', 'flamengo', 'corinthians']);
echo '<hr>';
echo TIMES[0];

?>