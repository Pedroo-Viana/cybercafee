<?php
include("conectadb");
$echo ("usuario");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST ['nome'];
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];
    $custo = $_POST['custo'];
    $preco = $_POST['preco'];    
}

$bancodedados = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome'";
$resultado = mysqli_query($link, $bancodedados);

while($tbl = mysqli_fetch_array($resultado)){
    $contagem = $tbl[0];
    if($contagem == 0){
    $bancodedados = "INSERT INTO produtos(pro_nome, pro_descricao, pro_preco, pro_custo, pro_estoque) VALUE ('$nome', '$descricao', '$preco', '$custo', '$estoque')";
    mysqli_query($link, $bancodedados);
}

else{
    echo ("PRODUTO JÁ CADASTRADO");
    header("Location: produto.php");
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR PRODUTOS</title>
</head>
<body>
    <form action="produto.php" method="post">
        <label for="">NOME DO PRODUTO</label>
        <input type="text" name="nome">
        <br>
        <label for="">DESCRIÇÃO DO PRODUTO</label>
        <input type="text" name="descricao">
        <br>
        <label for="">ESTOQUE</label>
        <input type="number" name="estoque">
        <br>
        <label for="">CUSTO </label>
        <input type="decimal" name="custo">
        <br>
        <label for="">PREÇO</label>
        <input type="deciaml" name="preco">
        <br>
        <input type="submit" value="CADASTRAR PRODUTO">
        
    </form>
</body>
</html>