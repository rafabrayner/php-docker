<?php

  // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
  $servidor = new PDO('mysql:host=db;dbname=livros', 'root', 'php');

  // 3ª Etapa - Executar uma consulta a partir do objeto PDO
  // Insert, Update e Delete
  $consultaPrep = $servidor->prepare("INSERT INTO famosos (nome) VALUES (:nome)");
  $consultaPrep->bindParam(':nome', $nome);


  $nome = "Famoso 1";
  $consultaPrep->execute();
  $nome = "Famoso 2";
  $consultaPrep->execute();
  $nome = "Famoso 3";
  $consultaPrep->execute();
  $nome = "Famoso 4";
  $consultaPrep->execute();

  $servidor = null;

?>