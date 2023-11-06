<?php
    function conectaDB(){
        $user="root";
        $pass="aluno";
        $host="localhost";
        $db="crudPHP";

        $con = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        return $con;
    }
?>