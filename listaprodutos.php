<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="css/pizza.css">
    <script src="https://kit.fontawesome.com/47e9777af5.js" crossorigin="anonymous"></script>
</head>
<body class="produtos">
    <h1>Lista de produtos</h1>
    <table border="1" bgcolor="#FFFFFF">
    <thead bgcolor="skyblue">
        <th>id_pizza</th>
        <th>Imagem</th>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th colspan="2">Ação</th>
    </thead>
        <?php
        include("conecta.php");
        $dados=mysqli_query($conexao, "SELECT * FROM tradicional");
        while ($item=mysqli_fetch_array($dados)){
    ?>
    <tr>
            <td><?=$item['id_pizza']?></td>
            <td><img height="50"src="arquivos/<?=$item['imagem']?>"></td>
            <td><?=$item['titulo']?></td>
            <td><?=$item['descricao']?></td>
            <td><?=$item['preco']?></td>
            <td><a href="editarTradicional.php?id=<?=$item['id_pizza']?>"><i class="fa fa-pencil"></a></i></td>
            <td onclick="verifica('<?=$item['id_pizza']?>')"><a href="#"><i class="fa fa-trash"></a></i></td>
    </tr>
       <?php } ?>
    </table>
            <script>
                function verifica(recid){
                    if(confirm("Tem certeza que deseja Excluir permanentemente este produto?")){
                            window.location="excluirPizzas.php?id="+recid
                    }
                }
            </script>
</body>
</html>