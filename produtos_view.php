<?php
    require_once 'ProdutoController.php';

    $pdo = new PDO("sqlite:estoque.db");
    $produtoModel = new Produto($pdo);
    $produtoController = new ProdutoController($produtoModel);

    $produtos = $produtoController->listarProdutos();

    foreach ($produtos as $produto) {
        echo "ID: " . $produto['id'] . "<br>";
        echo "Nome: " . $produto['nome'] . "<br>";
        echo "Descrição: " . $produto['descricao'] . "<br>";
        echo "Preço: " . $produto['preco'] . "<br>";
        echo "<hr>";
    }
?>
