<?php
//conexão truta
require_once 'db_connect.php';

//sessão
session_start();

//botão tlg
if(isset($_POST['btn-entrar'])):
  $erros = array();
  $login = mysqli_escape_string($connect, $_POST['login']);
  $password = mysqli_escape_string($connect, $_POST['password']);

  if(empty($login) || empty($password)):
    $erros[] = "<li>Campo login/senha precisa ser preenchido</li>";
  else:
    $sql = "SELECT login FROM usuarios WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);
    if(mysqli_num_rows($resultado) > 0):
      $password = md5($password);
      $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$password'";
      $resultado = mysqli_query($connect, $sql);
      if(mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        header('Location: home.php');
        mysqli_close();        
      else:
        $erros[] = "Senha errada";
      endif; 
    else:
      $erros[] = "Usuário não encontrado";
    endif; 
  endif; 
endif; 
mysqli_close();        
?>

<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Login</h1>
    <?php
      if(!empty($erros)):
        foreach ($erros as $erro) {
          echo $erro;
        }
      endif;
    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      Login: <input type="text" name="login">
      Senha: <input type="password" name="password">
      <button type="submit" name="btn-entrar">Entrar</button>
    </form>
  </body>
</html>