<?php
include("conecta.php");
$id=$_GET['id'];
$query="SELECT * FROM tradicional WHERE id_pizza=$id";

$sql=mysqli_query($conexao,$query);
$item=mysqli_fetch_assoc($sql);

?>
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
    <form method="post" enctype="multipart/form-data" action="" class="formulario">
        <label>Imagem Pizza:</label><br>
        <img height="50"src="arquivos/<?=$item['imagem']?>"><br>
        <label>Nova imagem:</label>
        <input type="file" name="arquivo" class="campo">
        
        <label>Título:</label>
        <input type="text" name="titulo" value="<?=$item['titulo']?>" class="campo" required>

        <label>Descrição:</label>
        <input type="text" name="descricao" value="<?=$item['descricao']?>" class="campo" required>

        <label>Preço:</label>
        <input type="text" name="preco" value="<?=$item['preco']?>" class="campo" >

        <input type="submit" value="Alterar">
    </form>
    <!-- essa parte do código teremos a codificação em php da execução do UPDATE -->
     <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
      
        $arquivo=$_FILES['arquivo'];
        if($arquivo['error']){
            die('falha ao enviar o arquivo');
        }
        if($arquivo['size']>6000000){
            die('Arquivo muito grande, selecione outro!');
        }
        $pasta="arquivos/";
        $nomearquivo=$arquivo['name'];
        $extensao=strtolower(pathinfo($nomearquivo,PATHINFO_EXTENSION));
        if($extensao!="jpg" && $extensao!="png"){
            die("tipo de arquivo não é aceito...");
        }
        $novonome=uniqid();    
        $deu_certo=move_uploaded_file($arquivo['tmp_name'],$pasta.$novonome.".".$extensao);
        if (!$deu_certo){
            die("falha ao enviar o arquivo");
        }
    
    
     $titulo=$_POST['titulo'];
     $descricao=$_POST['descricao'];
     $preco=$_POST['preco'];
     $erro='';
 
     if(empty($titulo)){
         $erro="Preencha o titulo!";
     }
     if(empty($descricao)){
         $erro="Preencha a descrição!";
     }
     if(empty($preco)){
         $erro="Preencha o preço!";
     }
     if($erro){
     echo "<p style='color:red;'>$erro</p>";
     die;
     }else{
         $atualiza="UPDATE tradicional SET
         imagem='$novonome.$extensao',
         titulo='$titulo',
         descricao='$descricao',
         preco=$preco WHERE id_pizza='$id'";
         $dados_atualizados=$conexao->query($atualiza)or die($conexao->error);
         if($dados_atualizados){
             header("location:listaprodutos.php");
         }else{
             die("ERROR:Não atualizado");
         }  
 
     }
    }
 ?>
</body>
</html>


