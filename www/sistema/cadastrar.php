<?php

  require_once "autoload.php";

  use Classes\Cadastro;
  use Classes\CadastroRepository;

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];

  $usuario = new Cadastro($nome, $email, $telefone);

  CadastroRepository::inserir($usuario);

  header("Location: lista_usuarios.php");

?>