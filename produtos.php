
<?php 
 include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <main>
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

                        <div class="box_produto ">
                            <div  id="<?php echo $rows['categoria'];?>">
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
        <footer id="rodape">
            <h4 id="formasPagamento"> Formas de pagamento</h4>
            <img width="35%" src="imagens/pag.jpg" alt="Formas de pagamento">
            <p> &copy Recode Pro</p>
     </footer>
</body>
</html>