<?php

  namespace Classes;

  final class ContaPoupanca extends Conta
  {

    public function __construct($saldo = 0)
    {
      parent::__construct($saldo);
    }
    
  }
?>