<?php
include("conecta.php");

$id=$_GET['id'];

mysqli_query($conexao,"DELETE FROM tradicional WHERE id_pizza=$id");

header("location:listaprodutos.php");


?>