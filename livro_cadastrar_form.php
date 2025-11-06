<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Cadastrar (Create)</title>
    <?php
    // Inclui a conexão com o banco e o layout
    include "referencias.php";
    ?>
</head>

<body>
    <form method="post" action="livro_inserir.php">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <h2>Livro :: Cadastrar</h2>

                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" class="form-control" required="" placeholder="Código ISBN (Ex: 978-85-xxxx)" name="txtIsbn">
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" required="" placeholder="Título do Livro" name="txtTitulo">
                    </div>

                    <div class="form-group">
                        <label>Ano de Publicação</label>
                        <input type="number" class="form-control" required="" name="txtAnoPublicacao">
                    </div>

                    <div class="form-group">
                        <label>Editora</label>
                        <input type="text" class="form-control" required="" placeholder="Nome da Editora" name="txtEditora">
                    </div>
                    
                    <div class="form-group">
                        <label>Quantidade Total de Exemplares</label>
                        <input type="number" class="form-control" required="" name="txtQtdTotal">
                    </div>


                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Cadastrar Livro</button>

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
