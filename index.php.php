<?php
include("conecta.php");
$tradicional=mysqli_query($conexao,"SELECT * FROM tradicional");
$especial=mysqli_query($conexao,"SELECT * FROM especial");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Zé</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Fjalla+One&family=Fredericka+the+Great&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/pizza.css">
</head>
<body>
    <!-- <div class="logo"><a href="#"><img src="img/logo.png"></a></div> -->
    <nav>
        <ul id="menu"> 
            <li><a href="#">Home</a></li>
            <li><a href="#pizzas">Pizzas</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <li><a href="#planos">Planos</a></li>
            <li><a href="#contatos">Contatos</a></li>
            <li><a href="#pedidos">Pedido</a></li>
        </ul>
</nav>
<header>
    <section id="pizzaria">
        <h1>PIZZA ZÉ</h1>
        <h4>A melhor pizza de Curitiba</h4>
        <p class="chamada"><a href="#contato">Em cada fatia uma nova experiência, faça seu pedido</a></p>
        <h2>Tel:(41) 7070-7070</h2>
    </section>
</header>
<section id="pizzas">
    <div class="pizza-cardapio-titulo">
        <h3>Algumas opções de nosso Cardápio.</h3>
        <h3>Pizzas Tradicionais</h3>
    </div>
    <div class="pizza-cardapio-produtos">
        <?php foreach($tradicional as $pizza1):?>
        <div class="container-pizza">
            <div class="container-pizza-dia">
                <img src="arquivos/<?=$pizza1['imagem']?>">
            </div>
            <p><?= $pizza1['titulo']?></p>
            <p><?= $pizza1['descricao']?></p>
            <p><?= "R$".$pizza1['preco']?></p>
        </div>
        <?php endforeach;?>
    </div>    
    <div class="pizza-cardapio-titulo">
        <h3>Pizzas Especiais</h3>
    </div>
    <div class="pizza-cardapio-produtos">
        <?php foreach($especial as $pizza2):?>
        <div class="container-pizza">
            <div class="container-pizza-dia">
                <img src="arquivos/<?=$pizza2['imagem']?>">
            </div>
            <p><?= $pizza2['titulo']?></p>
            <p><?= $pizza2['descricao']?></p>
            <p><?= "R$".$pizza2['preco']?></p>
        </div>
        <?php endforeach;?>
    </div>    
</section>
    
</body>
</html>