<?php
//conexão truta
require_once 'db_connect.php';
//sessão
session_start();

//verificacao
if(!isset($_SESSION['logado'])):
  header("Location: index.php");
endif;

$id =  $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close();
?>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf_8">
  </head>
  <body>
    <h1>Home logado >:(</h1>
    <p>Olá: <?php echo $dados['nome']?></p>
    <a href="logout.php">Sair</a>
  </body>
</html>