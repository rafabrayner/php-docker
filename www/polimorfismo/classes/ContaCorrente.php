<?php

  namespace Classes;

  final class ContaCorrente extends Conta
  {

    private $taxaSaque = 0.10;

    public function __construct($saldo = 0)
    {
      parent::__construct($saldo);
    }

   
    public function saca($valor)
    {
      $valorDebito = $valor + $this->getTaxaSaque();
      if($this->getSaldo() >= $valorDebito) {
        $this->setSaldo($this->getSaldo() - $valorDebito);
        echo "Saque realizado com sucesso!";
      }
      else {
        echo "Saldo Insuficiente";
      }
    }

    /**
     * Get the value of taxaSaque
     */ 
    public function getTaxaSaque()
    {
        return $this->taxaSaque;
    }
  }
?>