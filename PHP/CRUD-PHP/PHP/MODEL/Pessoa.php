<?php
     class Pessoa{
        public $id;
        public $nome;
        public $cpf;
        

        public function setAll($id, $nome, $cpf){
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function setAllNoId($nome, $cpf){                                                                               
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        
        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        
        
        
    }
?>