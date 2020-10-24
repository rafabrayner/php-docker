<?php

  require_once "autoload.php";

  use Classes\Conta;
  use Classes\ContaCorrente;
  use Classes\ContaPoupanca;


  $contaCorrente = new ContaCorrente(200);
  $contaPoupanca = new ContaPoupanca(500);

  echo "Sacando R$ 100,00 na Conta Corente<br/>";
  $contaCorrente->saca(100);
  echo "<br/>";
  echo "<br/>Sacando R$ 100,00 na Conta Poupança<br/>";
  $contaPoupanca->saca(100);

  echo "<p></p>";

  echo "Saldo Conta Corrente<br/>";
  $contaCorrente->imprimeExtrato();
  echo "<p>Saldo Conta Poupança<br/>";
  $contaPoupanca->imprimeExtrato();

?>