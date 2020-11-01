
<?php 

    include_once("conexao.php");

    if (isset($_POST['nome']) && isset($_POST['msg'])) {
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

     $sql = "insert into comentarios (nome, msg) value ('$nome','$msg')";

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
            <h2>Contato</h2>
            <hr>
            <section class="contato">
                
                    <div >
                        <img width="20%" src="imagens/email.png" alt="">
                       <p> contato@fullstackeletro.com</p>
                    </div>
                    <div >
                        <img width="20%" src="imagens/wp.png" alt="">
                        <p>(11) 99999-9999</p>
        
                    </div>
                    
              
            </section>
        <p></p>
            <form method="post" class="formContato">
                <h4>Nome: </h4>
                <input type="text" name="nome" style="width: 400px"><br>
                <h4>Mensagem: </h4>
                <input type="text" name="msg" style="width: 400px;"><br>
                <input type="submit" value="Enviar">
        
            </form>


            <?php 
    $sql = "select * from comentarios";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        # code...
        while ($rows = $result->fetch_assoc()) {
            # code...
            echo "Data: ", $rows['data'], "<br>";
            echo "Nome: ", $rows['nome'], "<br>";
            echo "msg: ", $rows['msg'], "<br>";
            echo "<hr>";
            
                    }
    }else {
        # code...
        echo "Nenhum comentário ainda!";
    }
    ?>
    </main>

    <footer id="rodape">
        <h4 id="formasPagamento"> Formas de pagamento</h4>
        <img width="35%" src="imagens/pag.jpg" alt="Formas de pagamento">
        <p> &copy Recode Pro</p>
 </footer>
</body>
</html>