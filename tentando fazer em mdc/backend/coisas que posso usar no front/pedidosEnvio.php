<?php

$nome = $_POST['nomeCliente'];
$end = $_POST['endereco'];
$tel = $_POST['telefone'];
$nomeProd = $_POST['nomeProduto'];
$valUnit = $_POST['valorUnitario'];
$quant = $_POST['quantidade'];
$valTotal = $_POST['valorTotal'];

if (isset($_POST['nomeCliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['nomeProduto']) && isset($_POST['valorUnitario']) && isset($_POST['quantidade']) && isset($_POST['valorTotal'])) {


    $conn = mysqli_connect("localhost", "root", "", "fseletro");
    $sql = "insert into pedidos (nomeCliente, endereco, telefone, nomeProduto, valorUnitario, quantidade, valorTotal) value ('$nome','$end','$end','$nomeProd','$valUnit','$quant','$valTotal')";

    $conn->query($sql);


    echo "<script>
        alert('pedido enviado com sucesso!')
        window.location.href = 'pedido.php'
    </script>";
}