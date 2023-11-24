<?php
    session_start();

    if (!isset($_SESSION['pessoa'])) {
        header("Location: http://localhost/CRUD-PHP/PHP/VIEW/view_login.php");
        exit;
    }
?>