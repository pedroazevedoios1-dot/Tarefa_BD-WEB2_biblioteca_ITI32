<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Atualizar (Update)</title>
    <?php
    include "referencias.php"
    ?>
</head>
<body>
    <br>
    <?php
    // 1. Recebe os dados do formulário de edição
    $isbn = $_POST["txtIsbn"]; // PK (usada no WHERE)
    $titulo = $_POST["txtTitulo"];
    $ano_publicacao = $_POST["txtAnoPublicacao"];
    $editora = $_POST["txtEditora"];
    $qtd_total = $_POST["txtQtdTotal"];
    $qtd_disponivel = $_POST["txtQtdDisponivel"];

    // 2. Prepara a instrução SQL (UPDATE)
    $sql = "UPDATE Livro SET titulo = ?, ano_publicacao = ?, editora = ?, qtd_total = ?, qtd_disponivel = ? WHERE isbn = ?";

    // 3. Prepara o comando
    $comando = $conexao->prepare($sql);

    // 4. Vincula os parâmetros à instrução
    // 's' (titulo), 'i' (ano), 's' (editora), 'i' (qtd_total), 'i' (qtd_disponivel), 's' (isbn - no WHERE)
    $comando->bind_param("sisiss", $titulo, $ano_publicacao, $editora, $qtd_total, $qtd_disponivel, $isbn);

    // 5. Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Livro '{$titulo}' atualizado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao atualizar o livro: " . $comando->error . "</h1>";
    }

    // 6. Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>
</html>
