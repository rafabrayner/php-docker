<?php

namespace Classes;

class Cadastro
{
  private $codigo;
  private $nome;
  private $email;
  private $telefone;

  public function __construct(string $nome, string $email, string $telefone, int $codigo = null)
  {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->email = $email;
    $this->telefone = $telefone;
  }

  /**
   * Get the value of codigo
   */ 
  public function getCodigo()
  {
    return $this->codigo;
  }

  /**
   * Set the value of codigo
   *
   * @return  self
   */ 
  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;

    return $this;
  }

  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of telefone
   */
  public function getTelefone()
  {
    return $this->telefone;
  }

  /**
   * Set the value of telefone
   *
   * @return  self
   */
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;

    return $this;
  }

  public function exibir()
  {
    echo "Nome: {$this->getNome()} <br/> Email: {$this->getEmail()} <br/> Telefone: {$this->getTelefone()}";
  }

}
