<?php
    class Categoria {
        private $pdo;
        
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }
        
        public function getAllCategorias() {
            $stmt = $this->pdo->query("SELECT * FROM categorias");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getCategoriaById($id) {
            $stmt = $this->pdo->prepare("SELECT * FROM categorias WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        public function inserirCategoria($nome) {
            $stmt = $this->pdo->prepare("INSERT INTO categorias (nome) VALUES (?)");
            return $stmt->execute([$nome]);
        }
        
        // TODO
    }
?>
