<?php
   include_once "FrutaController.php";
   include_once "../MODEL/Fruta.php";
   

   if(!isset($_POST['op'])){
         echo("Erro parametro não pasado");
         exit();
   }

    $op = $_POST['op'];
   
    switch($op){
        case 'cadastrar':
            if(!isset($_POST['nome']) || !isset($_POST['descricao']) || !isset($_POST['quantidade']) || !isset($_POST['url_image'])){
                echo("Erro ao cadastrar, alguns parâmetros inválidos");
                exit();
            }
            
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $quantidade = $_POST['quantidade'];
            $url_image = $_POST['url_image'];
            
           
           $frutaController = new FrutaController();
           $frutaController->cadastrarFruta($nome, $descricao, $url_image, $quantidade);
           


        break;
        case 'atualizar':
            if(!isset($_POST['id']) || !isset($_POST['nome']) || !isset($_POST['descricao']) || !isset($_POST['quantidade']) || !isset($_POST['url_image'])){
             
                echo("Erro ao atualizar! algumas informaçãoes faltaram");
             exit();
            }
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $desc = $_POST['descricao'];
            $quant = $_POST['quantidade'];
            $url = $_POST['url_image'];
            $frutaController = new FrutaController();
            $frutaController->editarFruta($id, $nome, $desc, $url, $quant);

 
         break;
         case 'excluir':
            if(!isset($_POST['id'])){
                echo("Erro ao excluir! algumas informaçãoes faltaram");
                exit();
            }
            
            $id = $_POST['id'];
            $frutaController = new FrutaController();
                         $frutaController->excluirFruta($id);
             header('Location: ../VIEW/view_listagem.php');
         break;

    }
   
?>