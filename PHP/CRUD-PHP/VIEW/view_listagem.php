<table id="lista">
    <thead>
        <tr>
            <th>Id</th>
            <th>Imagem</th>
            <th>Link imagem</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Excluir</th>
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
            echo "<td><input type='text' name='quantidade' value='" . htmlspecialchars($fruta['url_image']) . "'></td>";
            echo "<td><input type='text' name='nome' value='" . htmlspecialchars($fruta['nome']) . "'></td>";
            echo "<td><input type='text' name='descricao' value='" . htmlspecialchars($fruta['descricao']) . "'></td>";
            echo "<td><input type='text' name='quantidade' value='" . htmlspecialchars($fruta['quantidade']) . "'></td>";

            echo '<td>
                <form action="../CONTROL/RotaPostController.php" method="post"> 
                    <input type="text" name="id" value="' . $fruta['id'] . '" hidden>
                    <input type="text" name="op" value="atualizar" hidden>
                    <input type="text" name="nome" value="' . $fruta['nome'] . '" hidden>
                    <input type="text" name="descricao" value="' . $fruta['descricao'] . '" hidden>
                    <input type="text" name="quantidade" value="' . $fruta['quantidade'] . '" hidden>
                    <input type="text" name="url_image" value="' . $fruta['url_image'] . '" hidden>
                    
                    <input type="submit" value="Salvar">
                </form>
            </td>';

            echo '<td>
                <form action="../CONTROL/RotaPostController.php" method="post"> 
                    <input type="text" name="op" value="excluir" hidden>
                    <input type="text" name="id" value="' . $fruta['id'] . '" hidden>
                    <input type="submit" value="Excluir">
                </form>
            </td>';

            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<a href="view_home.php">Página de Home</a>
            
    </tbody>

</table>