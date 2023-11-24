<?php
    include_once "../MODEL/Pessoa.php";
    include_once "../DB/Database.php";

    class PessoaDAO{
        public function __construct(){}

        //cadastrar
        public function create(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'INSERT INTO pessoa (nome, cpf) VALUES (:nome, :cpf);';
            $stmt = $conn->prepare($sql);

            $nome = $pessoa->getNome();
            $cpf = $pessoa->getCpf();
            
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':cpf', $cpf);
        
            return $stmt->execute();

        }

        //Login
        public function login(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'SELECT * FROM pessoa WHERE cpf = :cpf AND nome = :nome;';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':cpf', $pessoa->getCpf());
            $stmt->bindValue(':nome', $pessoa->getNome());
            
        
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado !== false) {
                $pessoa = new Pessoa();
                $pessoa->setAll(
                    $resultado['id'],
                    $resultado['nome'],
                    $resultado['cpf']
                );

                return $pessoa;
            } else {
                return null;
            }
            

        }


    }

?>