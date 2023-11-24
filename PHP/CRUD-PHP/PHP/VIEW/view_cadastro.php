<?php include_once "../../CSS/bootstrap.php"?>
<?php include_once "../../CSS/header.php"?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../CONTROL/RotaPostController.php" method="post">
                <div class="mb-3">
                    <input type="text" name="nome" placeholder="Nome da Fruta" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="descricao" placeholder="Descrição" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="quantidade" placeholder="Quantidade" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="text" name="url_image" placeholder="URL da Imagem" class="form-control">
                </div>
                <input type="text" name="op" value="cadastrar" hidden>
                <div class="mb-3">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </div>
            </form>
            <div class="mb-3">
                <a href="view_listagem.php" class="btn btn-secondary">Página de Listagem</a>
            </div>
        </div>
    </div>
</div>

<?php include_once "../../CSS/footer.php"?>