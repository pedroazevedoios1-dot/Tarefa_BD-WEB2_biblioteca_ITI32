<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro :: Pesquisar (U/D)</title>
    <?php
    include "referencias.php";
    ?>
</head>

<body>
    <form method="post" action="livro_editar.php">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h2>Livro :: Pesquisar para Editar/Excluir</h2>
                <div class="form-group">
                    <label>ISBN do Livro</label>
                    <input type="text" class="form-control" required="" placeholder="Digite o ISBN do livro" name="txtIsbn">
                </div>


                <br>
                <div class="form-group">

                    <button type="submit" formaction="livro_editar.php" class="btn btn-primary">Pesquisar Livro</button>

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
