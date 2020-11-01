
<?php 

include_once("conexao.php");

if (isset($_POST['nomeCliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['nomeProduto']) && isset($_POST['valorUnitario']) && isset($_POST['quantidade']) && isset($_POST['valorTotal'])) {
    $nome = $_POST['nomeCliente'];
    $end = $_POST['endereco'];
    $tel = $_POST['telefone'];
    $nomeProd = $_POST['nomeProduto'];
    $valUnit = $_POST['valorUnitario'];
    $quant = $_POST['quantidade'];
    $valTotal = $_POST['valorTotal'];

 $sql = "insert into pedidos (nomeCliente, endereco, telefone, nomeProduto, valorUnitario, quantidade, valorTotal) value ('$nome','$end','$end','$nomeProd','$valUnit','$quant','$valTotal')";
 $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contato - Full Stack Eletro</title>
<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<!-- menu -->
<?php 
include_once('menu.php');
?>


<!-- fim menu -->
<main>
        <h2>Pedidos</h2>
        <hr>       
   
        <form method="post" class="formContato">
            <h4>Nome: </h4>
            <input type="text" name="nome" style="width: 400px"><br>
            <h4>Endereço: </h4>
            <input type="text" name="end" style="width: 400px;"><br>
            <h4>telefone: </h4>
            <input type="number" name="tel" style="width: 400px;"><br>
            <h4>Nome do produto: </h4>
            <input type="text" name="nomeProd" style="width: 400px;"><br>
            <h4>Valor unitário: </h4>
            <input type="number" name="valUnit" style="width: 400px;"><br>
            <h4>Quantidade: </h4>
            <input type="number" name="quant" style="width: 400px;"><br>
            <h4>Valor total: </h4>
            <input type="number" name="valTotal" style="width: 400px;"><br>



            <input type="submit" value="Enviar">
    
        </form>


    
</main>

<footer id="rodape">
    <h4 id="formasPagamento"> Formas de pagamento</h4>
    <img width="35%" src="imagens/pag.jpg" alt="Formas de pagamento">
    <p> &copy Recode Pro</p>
</footer>
</body>
</html>