<?php 
session_unset();
session_destroy();
     if(!(isset($_GET["input1"]) && isset($_GET["input1"]) && isset($_GET["dado"]))){
        echo("Erro no login ou/e senha");
    }

    $name = $_GET["input1"];
    $pass = $_GET["input2"];

    if($name == "Admin" && $pass == "Admin")
    {
        session_start();
        $_SESSION['dado']=$_GET['dado'];
        header("Location: http://localhost/home.php");
        exit;
    }
    else
    {
        header("Location: http://localhost/form.php");
        exit;
    }
?>