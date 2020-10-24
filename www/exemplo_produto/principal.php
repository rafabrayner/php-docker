<?php

    require_once "Produto.php";

    $produto = new Produto("001", "Produto 1", 320);

    $produto->imprimirProduto();

    $produto = null;

?>