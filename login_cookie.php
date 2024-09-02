<?php
if(isset($_POST['email'])){
    include("conecta.php");
    $email=$_POST['email'];
    $senha=$_POST['senha'];

$query = "SELECT * FROM usuarios WHERE email='$email'";
    $sql = mysqli_query($conexao,$query);
    if($sql->num_rows==1){
        $usuario=$sql->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])){
            setcookie("email",$usuario["email"],time()+120,"/");
            setcookie("nome",$usuario["nome"],time()+120,"/");
            setcookie("apelido",$usuario["apelido"],time()+ 120,"/");
            header("location:boasvindas_cookies.php");
        }else{
            echo ('senha incorreta');
        }
    }
    
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
                <h1>Login</h1>
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
        <input type="submit" value="Entrar" name="submit"class="btn btn-primary btn-block">
            <div class="text-center">
                <a href="cadastro_usuario.php">Cadastre-se aqui...</a>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>    
</body>
</html>