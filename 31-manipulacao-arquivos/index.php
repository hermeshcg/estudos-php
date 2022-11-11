<?php

$arquivo = "arch.txt";
$conteudo = "Conteudo de teste \r\n";

//$openFile = fopen($arquivo, 'a'); //somente escritura
$openFile = fopen($arquivo, 'r'); //somente leitura

// fwrite($openFile, $conteudo);
$sizeFile = filesize($arquivo);

while(!feof($openFile)):
  $linha = fgets($openFile, $sizeFile);
  echo $linha;
endwhile;

fclose($openFile);