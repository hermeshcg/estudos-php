<?php
include_once "php_action/db_connect.php";
include_once "includes/header.php";
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Adicionar Cliente</h3>
    <form action="php_action/create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome</label>
      </div>
      <div class="input-field col s12">
        <input type="email" name="email" id="email">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="idade" id="idade">
        <label for="idade">Idade</label>
      </div>
    </form>
    <br>
    <button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
    <a href="index.php" class="btn">Retornar</a>
  </div>
</div>

<?php
include_once "includes/footer.php"
?>