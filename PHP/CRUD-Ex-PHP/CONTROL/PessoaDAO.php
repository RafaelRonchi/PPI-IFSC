<?php
include_once "../MODEL/Pessoa.php";
include_once "../DB/Database.php";
    class PessoaDAO{
        public function __construct(){
            
        }

        //cadastrar
        public function create(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'INSERT INTO usr (namev, email, pass) VALUES (:nome, :email, :senha);';
            $stmt = $conn->prepare($sql);

            $nome = $pessoa->getNome();
            $email = $pessoa->getEmail();
            $senha = $pessoa->getSenha();
            
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', $senha);
        
            return $stmt->execute();

        }

        //update
        public function update(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'UPDATE usr SET nome = :nome, email = :email, senha = :senha WHERE id = :id';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome', $pessoa->getNome());
            $stmt->bindValue(':email', $pessoa->getEmail());
            $stmt->bindValue(':senha', $pessoa->getSenha());
            $stmt->bindValue(':id', $pessoa->getId());
            return $stmt->execute();
        }

        //delete
        public function delete($id){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'DELETE FROM usr WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        //listar
        public function read(){
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = 'SELECT * FROM usr';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

        //listar por id
        public function search($id){
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = 'SELECT * FROM usr WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

        //autenticar
        public function autenticar(Pessoa $pessoa){
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = 'SELECT * FROM usr WHERE email = ? AND senha = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $pessoa -> getEmail());
            $stmt->bindValue(2, $pessoa -> getSenha());
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }


    }
?>