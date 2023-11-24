<?php
     class Fruta{
        public $id;
        public $nome;
        public $descricao;
        public $quantidade;
        public $url_image;

        public function setAll($id, $nome, $descricao, $url_image, $quantidade){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->url_image = $url_image;
        }

        public function setAllNoId($nome, $descricao, $url_image,$quantidade){                                                                                 
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->url_image = $url_image;
        }
        
        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getImagem(){
            return $this->url_image;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }
        
        
    }
?>