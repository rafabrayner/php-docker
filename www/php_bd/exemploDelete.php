<?php

  $id = $_GET['id'];

  // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
  $servidor = new PDO('mysql:host=db;dbname=livros', 'root', 'php');

  $servidor->query("DELETE from famosos where id = $id");

  $servidor = null;

  header("Location: exemploSelect.php");

?>