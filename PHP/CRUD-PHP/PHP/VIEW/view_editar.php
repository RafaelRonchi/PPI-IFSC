<?php include_once "../CONTROL/RedicionaParaLogin.php"?>
<?php include_once "../../CSS/bootstrap.php"?>
<?php include_once "../../CSS/header.php"?>

<?php
    include_once "../CONTROL/FrutaController.php";
    include_once "../MODEL/Fruta.php";
    
    if(!isset($_GET['id'])){
        echo("Erro: parâmetro não passado");
        exit();
    }
    $id = $_GET['id'];
    $frutaController = new FrutaController();
    $fruta = $frutaController->getFruta($id);

    if ($fruta == null) {
        echo("Erro ao buscar fruta");
        exit();
    }
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action='../CONTROL/RotaPostController.php' method='POST'>
                <input type='hidden' name='op' value='atualizar'>
                <div class="text-center mb-4">
                    <img src='<?php echo $fruta->getImagem(); ?>' alt='Figura' class="img-fluid rounded">
                </div>
                <div class="mb-3">
                    <label for='id'>Id</label>
                    <input type='hidden' name='id' value='<?php echo $fruta->getId(); ?>'>
                </div>
                <div class="mb-3">
                    <label for='nome'>Nome</label>
                    <input type='text' name='nome' value='<?php echo $fruta->getNome(); ?>' class="form-control">
                </div>
                <div class="mb-3">
                    <label for='descricao'>Descrição</label>
                    <input type='text' name='descricao' value='<?php echo $fruta->getDescricao(); ?>' class="form-control">
                </div>
                <div class="mb-3">
                    <label for='quantidade'>Quantidade</label>
                    <input type='text' name='quantidade' value='<?php echo $fruta->getQuantidade(); ?>' class="form-control">
                </div>
                <div class="mb-3">
                    <label for='url_image'>URL da Imagem</label>
                    <input type='text' name='url_image' value='<?php echo $fruta->getImagem(); ?>' class="form-control">
                </div>
                <div class="mb-3">
                    <input type='submit' value='Atualizar' class='btn btn-primary'>
                    <a href='view_listagem.php' class='btn btn-secondary'>Cancelar</a>
                </div>
            </form>

            <!-- Formulário para exclusão -->
            <form action='../CONTROL/RotaPostController.php' method='POST'>
                <input type='hidden' name='op' value='excluir'>
                <input type='hidden' name='id' value='<?php echo $fruta->getId(); ?>'>
                <input type='submit' value='Excluir' class='btn btn-danger'>
            </form>
        </div>
    </div>
</div>

<?php include_once "../../CSS/footer.php"?>
