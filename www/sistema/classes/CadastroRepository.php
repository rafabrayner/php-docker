<?php

namespace Classes;
use \PDO;

class CadastroRepository
{

  public static function inserir(Cadastro $usuario)
  {
    $servidor = new PDO('mysql:host=db;dbname=sistema', 'root', 'php');

    // 3ª Etapa - Executar uma consulta a partir do objeto PDO
    // Insert, Update e Delete
    $consultaPrep = $servidor->prepare("INSERT INTO cadastro(nome, email, telefone) VALUES (:nome, :email, :telefone)");
    
    $consultaPrep->bindParam(':nome', $usuario->getNome());
    $consultaPrep->bindParam(':email', $usuario->getEmail());
    $consultaPrep->bindParam(':telefone', $usuario->getTelefone());

    $consultaPrep->execute();

    $servidor = null;
  }

  public static function exibir()
  {
    $servidor = new PDO('mysql:host=db;dbname=sistema', 'root', 'php');

    $usuariosJsonArray = $servidor->query("SELECT codigo, nome, email, telefone FROM cadastro;");
    $usuarios = self::toObjectArray($usuariosJsonArray);


    if($usuarios) {
      echo "
        <table class='table table-dark'>
          <tr>
            <th scope='col'>CÓDIGO</th>
            <th scope='col'>NOME</th>
            <th scope='col'>EMAIL</th>
            <th scope='col'>TELEFONE</th>
          </tr>
        ";
      foreach($usuarios as $usuario) {
        echo "
        <tr>
          <th scope='row'>" . $usuario->getCodigo() . "</th>
          <td>" . $usuario->getNome() . "</td>
          <td>" . $usuario->getEmail() . "</td>
          <td>" . $usuario->getTelefone() . "</td>
        </tr>";
      }
      echo "</table>";
    }

    $servidor = null;
  }

  public static function toObject($usuarioJson): Cadastro
  {
    return new Cadastro($usuarioJson['nome'], $usuarioJson['email'], $usuarioJson['telefone'], $usuarioJson['codigo']);
  }

  /**
   * @return \Classes\Cadastro[]
   */
  public static function toObjectArray($usuariosJsonArray): array
  {
    $usuarios = [];
    if($usuariosJsonArray) {
      foreach($usuariosJsonArray as $usuarioJson) {
        array_push($usuarios, self::toObject($usuarioJson));
      }
    }
    
    return $usuarios;
  }
}
