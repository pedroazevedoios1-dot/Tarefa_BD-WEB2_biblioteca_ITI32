<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Inserir (Create)</title>

    <?php
    // Inclui a conexão com o banco
    include "referencias.php"
    ?>
</head>

<body>
    <br>
    <?php
    // 1. Recebe os dados do formulário via POST
    $isbn = $_POST["txtIsbn"];
    $titulo = $_POST["txtTitulo"];
    $ano_publicacao = $_POST["txtAnoPublicacao"];
    $editora = $_POST["txtEditora"];
    $qtd_total = $_POST["txtQtdTotal"];
    // Na criação, a quantidade disponível é igual à total
    $qtd_disponivel = $qtd_total;

    // 2. Prepara a instrução SQL (INSERT)
    $sql = "INSERT INTO Livro (isbn, titulo, ano_publicacao, editora, qtd_total, qtd_disponivel) VALUES (?, ?, ?, ?, ?, ?)";

    // 3. Prepara o comando
    $comando = $conexao->prepare($sql);

    // 4. Vincula os parâmetros à instrução
    // Tipos de dados: s (string), s (string), i (integer), s (string), i (integer), i (integer)
    $comando->bind_param("ssisis", $isbn, $titulo, $ano_publicacao, $editora, $qtd_total, $qtd_disponivel);

    // 5. Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Livro '{$titulo}' cadastrado com sucesso!</h1>";
    } else {
        // Se houver erro, pode ser por ISBN duplicado, por exemplo.
        echo "<h1 class='alert alert-danger'>Erro ao inserir o livro: " . $comando->error . "</h1>";
    }

    // 6. Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>
