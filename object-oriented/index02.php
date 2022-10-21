<?php
/* Aula 02 */

class Login {
  private $email;
  private $senha;

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($e){
    $this->email = $e;
  }

  public function getSenha(){
    return $this->senha;
  }

  public function setSenha($e){
    $this->senha = $e;
  }

  public function Logar(){
    if($this->email == "teste@teste.com" and $this->senha == "123456"):
      echo "Logado com sucesso";
    else:
      echo "Dados invalidos";
    endif;
  }
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("1234561");
$logar->Logar();


