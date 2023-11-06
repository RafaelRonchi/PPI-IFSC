<?php
    if(!isset($_GET["dado"])){
        header("Location: http://localhost/form.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<input type="submit" value="deslog" name="deslog">
</form>
<?php
    echo("Logado com sucesso");
    session_start();
    echo $_SESSION['dado'];

    if(isset($_POST["deslog"])){
        session_start();
        session_unset();
        session_destroy();
       
        header("Location: http://localhost/form.php");
        exit;
    }
        
   
?>
</body>
</html>