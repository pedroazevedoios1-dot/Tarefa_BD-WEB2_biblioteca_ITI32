<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Deletar (Delete)</title>

    <?php
    include "referencias.php"
    ?>
</head>

<body>
    <br>
    <?php

    // 1. Recebe o ISBN que veio do formulário de edição
    $isbn = $_POST["txtIsbn"];

    // 2. Prepara a instrução SQL (DELETE)
    $sql = "DELETE FROM Livro WHERE isbn = ?";

    // 3. Prepara o comando
    $comando = $conexao->prepare($sql);

    // 4. Vincula o parâmetro: 's' significa string (para o ISBN)
    $comando->bind_param("s", $isbn);

    // 5. Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Livro com ISBN {$isbn} excluído com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao remover o livro: " . $comando->error . "</h1>";
    }

    // 6. Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>
</html>
