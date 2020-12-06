
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
            <h2>Contato</h2>
            <hr>
            <section class="contato form-group">
                
                    <div >
                        <img width="20%" src="imagens/email.png" alt="">
                       <p> contato@fullstackeletro.com</p>
                    </div>
                    <div >
                        <img width="20%" src="imagens/wp.png" alt="">
                        <p>(11) 99999-9999</p>
        
                    </div>
                    
              
            </section>
        <h3>Formulário para entrar em contato conosco</h3>
            <form method="post" class="formContato  m-6">
            <div class="form-group">
            <label for="exampleInputEmail1">Digite seu nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome"> 
            </div>
            <br/><br/><br/>
            <div class="form-group">
             <label for="exampleInputPassword1">Mensagem</label>
            <input type="text" name="msg" class="form-control" id="exampleInputPassword1" placeholder="Como podemos te ajudar?">
            </div>
 
  <button type="submit" class="btn btn-danger">Enviar</button>
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

    <?php
        include_once("rodape.php")
    ?>
</body>
</html>