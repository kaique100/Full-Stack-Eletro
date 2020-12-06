<?php

include_once("conexao.php");


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <!-- menu -->
    <?php
    include_once('menu.php');
    ?>


    <!-- fim menu -->
    <main class="container">
        <h2>Pedidos</h2>
        <hr>

        <form method="post" action="pedidosEnvio.php" class="formContato container">

        <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nomeCliente" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Nome do produto</label>
                <input type="text" name="nomeProduto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do produto">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Valor unitário</label>
                <input type="text" name="valorUnitario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor unitário">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantidade">
                
            </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Valor total</label>
                <input type="number" name="valorTotal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor total">
                
            </div>
            
        



            <input type="submit"  class="btn btn-danger" value="Enviar">

        
    </main>

    <?php
    include_once("rodape.php")
    ?>
</body>

</html>