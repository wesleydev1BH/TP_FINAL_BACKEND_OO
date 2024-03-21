<?php
    class Produto {
        private $pdo;
        
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }
        
        public function getAllProdutos() {
            $stmt = $this->pdo->query("SELECT * FROM produtos");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function getProdutoById($id) {
            $stmt = $this->pdo->prepare("SELECT * FROM produtos WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        // TODO
    }
?>
