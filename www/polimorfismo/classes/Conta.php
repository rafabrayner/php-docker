<?php

  namespace Classes;

  abstract class Conta
  {
    private $saldo;
    const BANCO = "Banco do Brasil";

    public function __construct($saldo)
    {
      $this->saldo = $saldo;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
   
    final public function deposita($valor)
    {
      $this->setSaldo($this->getSaldo() + $valor);
    }

    public function saca($valor)
    {
      if($this->getSaldo() >= $valor) {
        $this->setSaldo($this->getSaldo() - $valor);
        echo "Saque realizado com sucesso!";
      }
      else {
        echo "Saldo Insuficiente";
      }
    }

    public function imprimeExtrato()
    {
      echo self::BANCO . ". Seu saldo é de R$ {$this->getSaldo()}";
    }
    
  }
?>