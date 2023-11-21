<?php
    include_once "../MODEL/Fruta.php";
    include_once "../MODEL/FrutaDAO.php";
    class FrutaController{
        
        public function __construct(){
            
        }
        public function cadastrarFruta($nome, $descricao, $url_image, $quantidade){
            // Validação dos dados
            echo ($url_image);
            $fruta = new Fruta();
            $fruta->setAllNoId($nome, $descricao, $url_image, $quantidade);

            $frutaDAO = new FrutaDAO();
            return $frutaDAO->create($fruta);
        }
        

        public function listarFruta(){                                                                                                        
            $frutaDAO = new FrutaDAO();
            $frutas = $frutaDAO->read();
            return $frutas;
        }

        public function editarFruta($id, $nome, $descricao, $url_image, $quantidade){
            $fruta = new Fruta();
            $fruta->setAll($id, $nome, $descricao, $url_image, $quantidade);
            $frutaDAO = new FrutaDAO();
            $frutaDAO->update($fruta);
        }
        

        public function excluirFruta($id){
            $frutaDAO = new FrutaDAO();
            $frutaDAO->delete($id);
        }

        public function getFruta($id){
            $frutaDAO = new FrutaDAO();
            $fruta = $frutaDAO->search($id);
            return $fruta;
        }


    }
?>