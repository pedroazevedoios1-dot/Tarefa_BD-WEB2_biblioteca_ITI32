<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros :: Listar (Read)</title>

    <?php
    include "referencias.php";
    ?>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h2>Acervo :: Lista de Livros (READ)</h2>
                <br>

                <div class="form-group">
                    <table>
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Título</th>
                                <th>Ano</th>
                                <th>Editora</th>
                                <th>Qtd Total</th>
                                <th>Qtd Disponível</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // 1. Prepara a instrução SQL (SELECT)
                            // O enunciado pede: 'Listar todos livros em ordem alfabética.'
                            $sql = "SELECT * FROM Livro ORDER BY titulo ASC";

                            // 2. Prepara o statement
                            $comando = $conexao->prepare($sql);

                            // 3. Executa o statement
                            $comando->execute();

                            // 4. Pega o resultado da consulta
                            $resultado = $comando->get_result();

                            // 5. Itera sobre os resultados (enquanto houver registros)
                            while ($registro = $resultado->fetch_assoc()) {
                                // Pega os valores da linha atual do banco
                                $isbn = $registro["isbn"];
                                $titulo = $registro["titulo"];
                                $ano_publicacao = $registro["ano_publicacao"];
                                $editora = $registro["editora"];
                                $qtd_total = $registro["qtd_total"];
                                $qtd_disponivel = $registro["qtd_disponivel"];
                            ?>

                                <tr>
                                    <td><?php echo $isbn ?></td>
                                    <td><?php echo $titulo ?></td>
                                    <td><?php echo $ano_publicacao ?></td>
                                    <td><?php echo $editora ?></td>
                                    <td><?php echo $qtd_total ?></td>
                                    <td><?php echo $qtd_disponivel ?></td>
                                </tr>

                            <?php
                            }
                            // 6. Fecha o statement e a conexão
                            $comando->close();
                            $conexao->close();
                            ?>
                        </tbody>
                    </table>
                </div>

                <br>

                <div class="form-group">
                    <a href="index.html">
                        <button type="button" class="btn btn-danger" name="btVoltar">
                            Voltar ao Menu
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
