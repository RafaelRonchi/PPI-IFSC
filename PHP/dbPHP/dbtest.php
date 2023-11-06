<?php
    include_once "db.php";

    if(conectaDB()){
        echo "conectado";
    }else{
        echo "erro ao conectar";
    }
?>