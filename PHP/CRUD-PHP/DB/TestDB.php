<?php
    include_once "Database.php";
    include_once "Pessoa.php";

    $conn= new Database();
    if($conn->getConnection()){
        echo "Conectado com sucesso";
    }else{
        echo "Erro ao conectar";
    }
    
?>