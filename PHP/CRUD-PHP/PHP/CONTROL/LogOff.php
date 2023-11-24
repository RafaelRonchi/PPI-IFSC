<?php
    session_start();

    if (isset($_SESSION['pessoa'])) {
        session_destroy();
        header("Location: http://localhost/CRUD-PHP/PHP/VIEW/view_login.php");
        exit;
    }
    else{
        header("Location: http://localhost/CRUD-PHP/PHP/VIEW/view_login.php");
        exit;
    }
?>