<?php
$host="localhost";
$usuario="root";
$senha="";
$nomeBanco="pizzaria";

$conexao=mysqli_connect($host,$usuario,$senha,$nomeBanco);

if($conexao){
    echo("");
}else{
    echo("erro de conexão!");
    die();
}

?>