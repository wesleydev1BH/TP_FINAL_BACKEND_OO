<?php
    require_once 'Produto.php';

    class ProdutoController {
        private $produtoModel;
        
        public function __construct(Produto $produtoModel) {
            $this->produtoModel = $produtoModel;
        }
        
        public function listarProdutos() {
            return $this->produtoModel->getAllProdutos();
        }
        
        public function exibirProduto($id) {
            return $this->produtoModel->getProdutoById($id);
        }
        
        // TODO
    }
?>
