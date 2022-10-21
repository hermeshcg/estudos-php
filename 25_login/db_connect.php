<?php
//conectando com o banco mano
$servername = "";
$username = "";
$password = "";
$dbname = "php_crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()):
  echo "Falha na conexão com o bando de dados".mysqli_connect_error();
endif;