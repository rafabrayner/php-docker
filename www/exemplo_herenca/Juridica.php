<?php

  class Juridica extends Pessoa
  {
    private $cnpj;

    public function __construct($nome, $cnpj)
    {
      // super()
      parent::__construct($nome);
      $this->cnpj = $cnpj;
    }

    public function validarCNPJ()
    {
      echo "<p>A ser implementado no futuro</p>";
    }
  }
?>