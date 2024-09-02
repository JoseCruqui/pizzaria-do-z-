<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/pizza.css">
</head>
<body class="produtos">
    <h1>Cadastro de pizzas tradicionais</h1>
    <form method="post" enctype="multipart/form-data" action="incluir.php" class="formulario">
        <label>Imagem Pizza:</label>
        <input type="file" name="arquivo" class="campo">
        <label>Título:</label>
        <input type="text" name="titulo" class="campo" required>
        <label>Descrição:</label>
        <input type="text" name="descricao" class="campo" required>
        <label>Preço:</label>
        <input type="text" name="preco" class="campo" required>
        <input type="submit" value="Inserir">
    </form>
</body>
</html>