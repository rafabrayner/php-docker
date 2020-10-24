<?php

  require_once "autoload.php";

  use Classes\Funcionario;
  use Classes\Gerente;
  use Classes\Programador;

  $nome = $_POST["nome"];
  $salario = $_POST["salario"];
  $cargo = $_POST["cargo"]; // 1 - para gerente / 2 - para programador
  $obs = $_POST["obs"];

  switch($cargo) {
    case 1:
      $funcionario = new Gerente($nome, $salario, $obs);
      break;
    case 2:
      $funcionario = new Programador($nome, $salario, $obs);
      break;
  }

  $funcionario->relatorioFunc();

?>