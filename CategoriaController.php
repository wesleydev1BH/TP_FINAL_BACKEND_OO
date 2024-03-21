<?php
    require_once 'Categoria.php';

    class CategoriaController {
        private $categoriaModel;
        
        public function __construct(Categoria $categoriaModel) {
            $this->categoriaModel = $categoriaModel;
        }
        
        public function listarCategorias() {
            return $this->categoriaModel->getAllCategorias();
        }
        
        public function exibirCategoria($id) {
            return $this->categoriaModel->getCategoriaById($id);
        }
        
        // TODO
    }
?>
