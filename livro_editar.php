<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Editar (Update/Delete)</title>
    <?php
    include "referencias.php";
    ?>
</head>

<body>
    <br>
    <?php
    // Declara variáveis para evitar erros (preenche com vazio se não encontrar)
    $isbn = "";
    $titulo = "";
    $ano_publicacao = "";
    $editora = "";
    $qtd_total = "";
    $qtd_disponivel = "";

    // 1. Recebe o ISBN que veio do formulário de pesquisa
    $isbn_busca = $_POST["txtIsbn"];

    // 2. Prepara a instrução SQL (SELECT com WHERE)
    $sql = "SELECT * FROM Livro WHERE isbn = ?";

    // 3. Prepara o statement
    $comando = $conexao->prepare($sql);

    // 4. Vincula o parâmetro: 's' significa string (para o ISBN)
    $comando->bind_param("s", $isbn_busca);

    // 5. Executa o statement
    $comando->execute();

    // 6. Pega o resultado da consulta
    $resultado = $comando->get_result();

    // 7. Verifica se encontrou o registro
    if ($resultado->num_rows > 0) {
        // Pega o registro (array associativo)
        $registro = $resultado->fetch_assoc();

        // Preenche as variáveis com os dados do banco
        $isbn = $registro["isbn"];
        $titulo = $registro["titulo"];
        $ano_publicacao = $registro["ano_publicacao"];
        $editora = $registro["editora"];
        $qtd_total = $registro["qtd_total"];
        $qtd_disponivel = $registro["qtd_disponivel"];

    } else {
        echo "<div class='container'><h1 class='alert alert-warning'>Nenhum livro encontrado com o ISBN: {$isbn_busca}</h1></div>";
    }

    // Fecha o statement e a conexão (mas manteremos a conexão aberta para o formulário se for preciso)
    $comando->close();
    $conexao->close();
    ?>


    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Livro :: Editar</h2>
                    
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" class="form-control" readonly required="" name="txtIsbn" value="<?php echo $isbn ?>">
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" required="" placeholder="Título do Livro" name="txtTitulo" value="<?php echo $titulo ?>">
                    </div>

                    <div class="form-group">
                        <label>Ano de Publicação</label>
                        <input type="number" class="form-control" required="" name="txtAnoPublicacao" value="<?php echo $ano_publicacao ?>">
                    </div>

                    <div class="form-group">
                        <label>Editora</label>
                        <input type="text" class="form-control" required="" placeholder="Nome da Editora" name="txtEditora" value="<?php echo $editora ?>">
                    </div>

                    <div class="form-group">
                        <label>Quantidade Total de Exemplares</label>
                        <input type="number" class="form-control" required="" name="txtQtdTotal" value="<?php echo $qtd_total ?>">
                    </div>

                    <div class="form-group">
                        <label>Quantidade Disponível (para empréstimo)</label>
                        <input type="number" class="form-control" required="" name="txtQtdDisponivel" value="<?php echo $qtd_disponivel ?>">
                    </div>


                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btEditar" formaction="livro_atualizar.php">
                            Atualizar Livro (UPDATE)
                        </button>

                        <button type="submit" class="btn btn-warning" name="btExcluir" formaction="livro_deletar.php" onclick="return confirm('Tem certeza que deseja EXCLUIR este livro?');">
                            Excluir Livro (DELETE)
                        </button>


                        <a href="index.html">
                            <button type="button" class="btn btn-danger" name="btVoltar">
                                Voltar
                            </button>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </form>

</body>

</html>
