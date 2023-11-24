<?php include_once "../CONTROL/RedicionaParaLogin.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Frutas</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#pesquisar").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#lista tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
        </script>


    <?php include_once "../../CSS/bootstrap.php" ?>
    <?php include_once "../../CSS/header.php" ?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        #lista {
            background-color: #fff;
            margin-top: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        #lista th, #lista td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        #lista th {
            background-color: #007bff;
            color: #fff;
        }

        #lista tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        #lista tbody tr:nth-child(even) {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <label for="">Pesquisar por nome</label>
                <input type="text" class="form-control" id="pesquisar">
            </div>
        </div>
        <table id="lista" class="table mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "../CONTROL/FrutaController.php";
                $frutaController = new FrutaController();
                $frutas = $frutaController->listarFruta();
                
                foreach ($frutas as $fruta) {
                    echo "<tr>";
                    echo "<td>" . $fruta['id'] . "</td>";
                    echo "<td><img src='" . $fruta['url_image'] . "' alt='Figura'></td>";
                    echo "<td><p>" . htmlspecialchars($fruta['nome']) . "</p></td>";
                    echo "<td><p>" . htmlspecialchars($fruta['descricao']) . "</p></td>";
                    echo "<td><p>" . htmlspecialchars($fruta['quantidade']) . "</p></td>";
                    echo "<td><a class='btn btn-primary' href='../CONTROL/CrudViewController.php?acao=editar&id=" . $fruta['id'] . " '>Editar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include_once "../../CSS/footer.php" ?>
</body>
</html>