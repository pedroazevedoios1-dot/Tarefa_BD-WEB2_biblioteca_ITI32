<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca :: Acervo e CRUD</title>
    <?php
        // Inclui as referências CSS e a conexão com o BD
        include "referencias.php";
    ?>
</head>
<body>
    <main class="bg-light">
        <div class="item bg-gradient">
            <a href="livro_cadastrar_form.php">Cadastrar Novo Livro (C)</a>
        </div>
        <div class="item bg-gradient">
            <a href="livro_listar.php">Listar Livros (R)</a>
        </div>
        <div class="item bg-gradient">
            <a href="livro_pesquisar_form.php">Pesquisar/Editar Livro (U/D)</a>
        </div>
    </main>
</body>
</html>
