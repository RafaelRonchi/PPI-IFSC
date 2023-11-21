<?php
    class Login{
        public $id;
        public $login;
        public $senha;

        public function setAll($id, $login, $senha){
            $this->id = $id;
            $this->login = $login;
            $this->senha = $senha;
        }

        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getLogin(){
            return $this->login;
        }
        public function getSenha(){
            return $this->senha;
        }

    }
?>