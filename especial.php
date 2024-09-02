<?php
include("conecta.php");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $preco=$_POST['preco'];
    
    if(isset($_FILES['arquivo'])){
    $arquivo=$_FILES['arquivo'];
        if($arquivo['error']){
            die("falha ao enviar arquivo");
        }
        if($arquivo['size']>6000000){
            die("arquivo muito grande!!! ");
        }   
        $pasta="arquivos/";
        $nomedoarquivo=$arquivo['name'];
        $extensao=strtolower(pathinfo($nomedoarquivo,PATHINFO_EXTENSION));
        $novoNomedoArquivo=uniqid().".".$extensao;
        if($extensao!="jpg"&& $extensao!="png"){
            die("tipo de arquivo não é aceito!");
        }
        $deu_certo=move_uploaded_file($arquivo['tmp_name'],$pasta.$novoNomedoArquivo);
        if (!$deu_certo){
            die("falha ao enviar o arquivo");
        }
    }else {
        echo "selecione um arquivo";
    }

    $sql=mysqli_query($conexao,"INSERT INTO `especial`(`id_pizza`, `imagem`, `titulo`, `descricao`, `preco`) VALUES (default,'$novoNomedoArquivo','$titulo','$descricao','$preco') ");

    if(!$sql){
        die("erro ao inserir dados no banco:".mysqli_error($conexao));
    }else{
        echo("dados inseridos com sucesso!");
    }
   exit;
}




?>