<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
       function soma ($a, $b){
        return 
        $a + $b;
       }
       function subtr ($a, $b){
        return $a - $b;
       }
       function multi ($a, $b){
        return $a * $b;
       }
       function divs ($a, $b){
        return $a / $b;
       }
       if(!(isset($_GET["A"]) && isset($_GET["A"]) && isset($_GET["select"]))){
             header("Location: http://localhost/erro.php");
            exit;
       } else{

        $simbolo = $_GET["select"];
        $A = $_GET["A"];
        $B = $_GET["B"];

        if($simbolo == "*"){
            echo multi($A, $B);
        }
        if($simbolo == "/"){
            echo divs($A, $B);
        }
        if($simbolo == "+"){
            echo soma($A, $B);
        }
        if($simbolo == "-"){
            echo subtr($A, $B);
        }
        
       }
       //echo soma(5, 10);
    ?>
</body>
</html>