<?php
    require_once 'CategoriaController.php';

    $pdo = new PDO("sqlite:estoque.db");
    $categoriaModel = new Categoria($pdo);
    $categoriaController = new CategoriaController($categoriaModel);

    $categorias = $categoriaController->listarCategorias();

    foreach ($categorias as $categoria) {
        echo "ID: " . $categoria['id'] . "<br>";
        echo "Nome: " . $categoria['nome'] . "<br>";
        echo "<hr>";
    }
?>
