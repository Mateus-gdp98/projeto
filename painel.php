<?php

include('conexao.php');
include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tela de Cadastro</title>
    <meta charset="UTF-8">
   
</head>
<body>
    <h1>Cadastrar produtos</h1>

    <?php

        filter_input_array(input_post, )
        "INSERT INTO produtos_promocionais (produto, valor, data) VALUES () ";
    ?>
    <form name="CadProduto" method="POST" action="processar.php">
        <label>Produto:</label>
        <input type="text" name="produto" id="produto" placeholder="Insira o nome do produto"><br><br>

        <label for="amount">Valor:</label>
        <input type="text" name="valor" id="valor" placeholder="R$" pattern="\d+(\.\d{2})?" required><br><br>

        <label for="data">Data de Validade da Promoção:</label>
        <input type="date" name="data" id="data" required><br><br>

        <input type="submit" value="Cadastrar" name="CadPruduto">
    </form>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>