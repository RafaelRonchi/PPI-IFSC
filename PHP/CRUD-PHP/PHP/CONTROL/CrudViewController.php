<?php

    if(!isset($_GET['id']) || !isset($_GET['acao'])){
    echo("Erro parametro não passodo");
    exit();
    }

    $id = $_GET['id'];
    $acao = $_GET['acao'];

    switch($acao){
        case 'editar':
            header('Location: ../VIEW/view_editar.php?id='.$id);
        break;
        case 'excluir':
            header('Location: ../VIEW/view_excluir.php?id='.$id);
        break;
    }

?>