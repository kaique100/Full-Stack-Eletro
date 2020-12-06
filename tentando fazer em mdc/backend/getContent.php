<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    $tabela = $_GET['table'];

    $conn = mysqli_connect($servername, $username, $password, $database);

    mysqli_set_charset($conn, "utf8");

    if (!$conn) {
        die("A conexão ao banco de dados falhou" . mysqli_connect_error());
    }

    setlocale(LC_MONETARY, 'pt_BR');

    $sql = "select * from $tabela";
    $result = $conn->query($sql);

   echo  json_encode( $result->fetch_all(MYSQLI_ASSOC), true);

   mysqli_close($conn);
          
?>