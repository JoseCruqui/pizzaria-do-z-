<?php
session_start();
echo "<h1> Bem vindo a minha página  </h1>";
echo "<hr>";
echo "<hr>";
echo "<h2> Seu email e senha foram validados</h2>";
?>


<p> seu email :<?=$_SESSION["email_usuario"]?></p><br>
<p> seu nome:<?=$_SESSION["nome_usuario"]?></p><br>
<p> seu apelido:<?=$_SESSION["apelido"]?></p><br>


<a href="logout.php">Sair</a>
