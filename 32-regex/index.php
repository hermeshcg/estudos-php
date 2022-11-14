<?php
//^ inicio da expreassão, $ final da expressao - /i - case sensitive
// [] conjunto de caracteres
// {} ocorrencias - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

$string = "hermes@asd.com";
$padraoEmail = "/^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/i";

if (preg_match($padraoEmail, $string)) :
  echo "EMAIL Válido";
  echo "<br>";
  echo $string;
else:
  echo "EMAILInválido";
  echo "<br>";
endif;

echo "<hr>";

//padrão data
$data = "10/02/2022";
$padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if (preg_match($padraoData, $data)) :
  echo "DATA Válido";
  echo "<br>";
  echo $data;
else:
  echo "DATA Inválido";
  echo "<br>";
endif;
echo "<hr>";

//padrão apenas para formatação CPF
$cpf = "111.111.111-11";
$padraoCpf = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";

if (preg_match($padraoCpf, $cpf)) :
  echo "CPF Válido";
  echo "<br>";
  echo $cpf;
else:
  echo "CPFInválido";
  echo "<br>";
endif;
echo "<hr>";

//padrão apenas para formatação CEP
$cpf = "11111-111";
$padraoCpf = "/^[0-9]{5}\-[0-9]{3}$/";

if (preg_match($padraoCpf, $cpf)) :
  echo "CEP Válido";
  echo "<br>";
  echo $cpf;
else:
  echo "Inválido";
  echo "<br>";
endif;