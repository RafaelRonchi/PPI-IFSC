<?php
    include_once "../MODEL/Pessoa.php";
    include_once "PessoaDAO.php";
    class PessoaController{
        
        public function __construct(){
            
        }
        public function cadastrarPessoa($nome, $email, $senha){
            // Validação dos dados
            $pessoa = new Pessoa();
            $pessoa->setAllNoId($nome, $email, $senha);
            
            $pessoaDAO = new PessoaDAO();
            return $pessoaDAO->create($pessoa);
        }

        public function listarPessoas(){                                                                                                        
            $pessoaDAO = new PessoaDAO();
            $pessoas = $pessoaDAO->read();
            return $pessoas;
        }

        public function editarPessoa($id ,$nome, $email, $senha){
            $pessoa = new Pessoa();
            $pessoa->setAll($id, $nome, $email, $senha);
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO->update($pessoa);
        }

        public function excluirPessoa($id){
            $pessoaDAO = new PessoaDAO();
            $pessoaDAO->delete($id);
        }

        public function getPessoa($id){
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO->search($id);
            return $pessoa;
        }

        public function autenticarPessoa($email, $senha){
            $pessoaDAO = new PessoaDAO();
            $pessoa = $pessoaDAO->autenticar($email, $senha);
            return $pessoa;
        }
    }
?>