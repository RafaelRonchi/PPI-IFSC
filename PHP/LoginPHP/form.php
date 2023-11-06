<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100vh;
            height: 100vh;
        }
        .form{
            position: absolute;
            top: 50%;
            left: 50%;  
            transform: translate(-50%, -50%);
        }
        form{
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="index.php">
            <label for="input1">Name</label>
            <input type="text" name="input1">
            <label for="input2">Pass</label>
            <input type="text" name="input2">
            <label for="dado">Frase</label>
            <input type="text" name="dado">
            <input type="submit" value="Logar">
        </form>
    </div>
</body>
</html>