
<?php 
 include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <met<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    
</head>
<body>
    <!-- menu -->
    <?php 
    include_once('menu.php');
   ?>
    <!-- fim menu -->
    <main class="container">
            <header>
                    <h2>Produtos</h2>
                </header>
                <hr>



                        <section class="categorias">
                            <h3>Categorias</h3>
                            <ul>
                                <li onclick="exibir_todos('')">Todos(12)</font></li>
                                <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</font></li>
                                <li onclick="exibir_categoria('fogao')">Fogões(2)</font></li>
                                <li onclick="exibir_categoria('microondas')">Micro ondas(3)</font></li>
                                <li onclick="exibir_categoria('lavaloucas')">Lava-Louças(2)</font></li>
                                <li onclick="exibir_categoria('lavaroupa')">Maquina de lavar roupa(2)</font></li>
                            </ul>                
                        </section>
                     


                        <section class="produtos ">
                        <?php 
    $sql = "select * from produtos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        # code...
        while ($rows = $result->fetch_assoc()) {
            # code...
            
            ?>

                        <div class="box_produto">
                            <div id="<?php echo $rows['categoria'];?>">
                                <img src="<?php echo $rows['imagem'];?>"  onmouseout="destaque(this)" onmouseover="destaque(this)">
                           
                            <p class="descricao"><?php echo $rows['descricao'];?></p>
                            <hr>
                            <p class="descricao"><strike>R$ <?php echo $rows['preco'];?></strike></p><br>
                            <p class="preco"> R$ <?php echo $rows['preco_venda'];?></p><br>
                            </div>
            
                           
                    </div>
                    <?php
        }
    }else {
        # code...
        echo "Nenhum produto cadastrado!";
    }
    ?>
    </section>
    </main>
    <?php
        include_once("rodape.php")
    ?>
</body>
</html>