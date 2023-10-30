<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>AAA</p>1
    <?php
        $var = 'Hello World!';
        echo $var . 'Texto';
        echo "$var Texto";

        class Pessoa{
            public $nome;

            public function __construct($n){
                $this -> nome = $n;
            }
            public function alterarNome($n){
                $this -> nome = $n;
            }

            public function getNome(){
                return $this -> nome;
            }

            public function getTamanhoNome($n){
                return strlen($n);
            }
        }

        $p1 = new Pessoa("a");
        $p2 = new Pessoa("b");
        $p1 -> alterarNome("Rafael");
        echo $p1 -> getNome();
        echo $p1 -> getTamanhoNome($p1 ->getNome());

        $pessoas = array($p1, $p2);

        foreach($pessoas as $pessoa){
            echo "Nome: ". $pessoa -> getNome()."<br>";
        }
    ?>
</body>
</html>