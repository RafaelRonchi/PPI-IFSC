<?php
   include_once "PessoaController.php";
   include_once "../MODEL/Pessoa.php";
   

   if(!isset($_POST['op'])){
         header('Location: index.php');
         exit();
   }

    $op = $_POST['op'];
   
    switch($op){
        case 'cadastrar_user':
           if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha'])){
            header('Location: index.php');
            echo("Erro ao cadastrar");
            exit();
           }
           
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $pessoaController = new PessoaController();
            $pessoaController->cadastrarPessoa($nome, $email, $senha);

        break;
        case 'atualizar_user':
            if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['id'])){
             
                echo("Erro ao atualizar");
             exit();
            }
            $id = $_POST['id'];
             $nome = $_POST['nome'];
             $email = $_POST['email'];
             $senha = $_POST['senha'];
             $pessoaController = new PessoaController();
             $pessoaController->editarPessoa($id ,$nome, $email, $senha);
 
         break;
         case 'excluir_user':
            if(!isset($_POST['id'])){
             header('Location: index.php');
             echo("Erro ao excluir");
             exit();
            }
            
            $id = $_POST['id'];
             $pessoaController = new PessoaController();
             $pessoaController->excluirPessoa($id);
 
         break;

    }
   
?>