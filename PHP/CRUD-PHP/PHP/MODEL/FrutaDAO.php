<?php
include_once "../MODEL/Fruta.php";
include_once "../DB/Database.php";
    class FrutaDAO{
        public function __construct(){}

        //cadastrar
        public function create(Fruta $fruta){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'INSERT INTO item (nome, descricao, quantidade, url_image) VALUES (:nome, :descricao, :quantidade, :url_image);';
            $stmt = $conn->prepare($sql);

            $nome = $fruta->getNome();
            $descricao = $fruta->getDescricao();
            $quantidade = $fruta->getQuantidade();
            $url_image = $fruta->getImagem();
            
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':descricao', $descricao);
            $stmt->bindValue(':quantidade', $quantidade);
            $stmt->bindValue(':url_image', $url_image);
        
            return $stmt->execute();

        }

        //update
        public function update(Fruta $fruta){
            $dao = new Database();
            $conn = $dao->getConnection();
        
            $sql = 'UPDATE item SET nome = :nome, descricao = :descricao, quantidade = :quantidade, url_image = :url_image WHERE id = :id;';
        
            try {
                $stmt = $conn->prepare($sql);
                
                $stmt->bindValue(':nome', $fruta->getNome());
                $stmt->bindValue(':quantidade', $fruta->getQuantidade());
                $stmt->bindValue(':descricao', $fruta->getDescricao());
                $stmt->bindValue(':url_image', $fruta->getImagem());
                $stmt->bindValue(':id', (int)$fruta->getId());
        
                
                $stmt->execute();
            } catch (PDOException $e) {
                // Captura e trata a exceção aqui
                echo "Erro ao executar a consulta: " . $e->getMessage();
            }
        }
        

        //delete
        public function delete($id){
            $dao = new Database();
            $conn = $dao->getConnection();

            $sql = 'DELETE FROM item WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }

        //listar
        public function read(){
            $dao = new Database();
            $conn = $dao->getConnection(); 

            $sql = 'SELECT * FROM item';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

        public function search($id){
            $dao = new Database();
            $conn = $dao->getConnection(); 
        
            $sql = 'SELECT * FROM item WHERE id = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            
            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                $fruta = new Fruta();

                $fruta->setAll(
                    $resultado['id'],
                    $resultado['nome'],
                    $resultado['descricao'],
                    $resultado['url_image'],
                    $resultado['quantidade']
                );
        
                return $fruta;
            } else {
                return null; 
            }
        }
        
        


    }
?>