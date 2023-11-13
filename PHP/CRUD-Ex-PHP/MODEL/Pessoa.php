<?php
     class Pessoa{
        public $id;
        public $namev;
        public $email;
        public $pass;

        public function setAll($id, $namev, $email, $pass){
            $this->id = $id;
            $this->namev = $namev;
            $this->email = $email;
            $this->pass = $pass;
        }

        public function setAllNoId($namev, $email, $pass){                                                                                 
            $this->namev = $namev;
            $this->email = $email;
            $this->pass = $pass;
        }
        
        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->namev;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->pass;
        }
        
        
    }
?>