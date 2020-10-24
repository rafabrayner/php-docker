<?php

  class Fisica extends Pessoa
  {
    private $cpf;

    public function __construct($nome, $cpf)
    {
      // super()
      parent::__construct($nome);
      $this->cpf = $cpf;
    }

    public function validarCPF()
    {
      echo "<p>A ser implementado no futuro</p>";
    }
  }
?>