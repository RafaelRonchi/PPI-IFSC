<?php
    include_once "../MODEL/PessoaDAO.php";
    include_once "../MODEL/Pessoa.php";

    if(!isset($_POST['op'])){
        echo("Erro parametro não passado");
        exit();
    }
    $op = $_POST['op'];

    switch ($op) {
        case 'cadastrar':
            if(!isset($_POST['nome']) || !isset($_POST['cpf'])){
                echo("Erro ao cadastrar, alguns parâmetros inválidos");
                exit();
            }
            $pessoaDAO = new PessoaDAO();
            $pessoa = new Pessoa();
            $pessoa->setAllNoId($_POST['nome'], $_POST['cpf']);
            $pessoaDAO->create($pessoa);
            header('Location: ../VIEW/view_login.php');

            break;
        case 'login':
               
            if(!isset($_POST['nome']) || !isset($_POST['cpf'])){
                echo("Erro ao cadastrar, alguns parâmetros inválidos");
                exit();
            }
            $pessoaDAO = new PessoaDAO();
            $pessoa = new Pessoa();
            $pessoa->setAllNoId($_POST['nome'], $_POST['cpf']);
            $pessoaLogada = $pessoaDAO->login($pessoa);

            if($pessoaLogada != null){
                session_start();
                $_SESSION['pessoa'] = $pessoaLogada;
                header('Location: ../VIEW/view_listagem.php');
            } else {
                echo("Erro ao logar, usuário não encontrado");
            }

            break;
        default:
            echo("Erro parametro não passado");

            break;
    }
?>