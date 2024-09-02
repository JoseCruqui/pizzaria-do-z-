<?php
if(isset($_POST['email'])){
    include("conecta.php");
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $nome=$_POST['nome'];
    $apelido=$_POST['apelido'];

    $hash=password_hash($senha,PASSWORD_DEFAULT);

    mysqli_query($conexao,"INSERT INTO `usuarios`(`id_usuario`, `email`, `senha`, `nome`, `apelido`) VALUES (DEFAULT,'$email','$hash','$nome','$apelido')");
   
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 5%;"> 
    <div class="row">
    <div class="col-md-4"></div>
       <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">
                <h1>Cadastro de Usuários</h1>
            </div> 
        <div class="card-body">
        <form action="" method="POST" class="formulario">
            <div class="mb-4">
        <label>E-mail:</label>
        <input type="email" name="email">
            </div>
            <div class="mb-3">
        <label>Senha:</label>
        <input type="password" name="senha">
            </div>

            
            <div class="mb-3">
        <label>nome:</label>
        <input type="text" name="nome">
            </div>

            <div class="mb-3">
        <label>apelido:</label>
        <input type="text" name="apelido">
            </div>

    

        <input type="submit" value="cadastrar" name="submit"class="btn btn-primary btn-block">
        </form>
    </div>
    </div>
    </div>
    </div>
</div>    
</body>
</html>