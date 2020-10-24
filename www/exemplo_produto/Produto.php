<?php
    
  class Produto 
  {
    private $codigo;
    private $nome;
    private $preco;

    public function __construct($codigo, $nome, $preco)
    {
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->preco = $preco;
    }

    public function imprimirProduto()
    {
      echo "<p>Produto: {$this->nome}</p>";
      echo "<p>Preço: {$this->preco}</p>";
    }

    public function __destruct()
    {
      echo "<p>Adeus mundo cruel!</p>";
    }
  }

?>