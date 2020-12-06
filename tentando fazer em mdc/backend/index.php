<?php

require('model/fseletro.php');

header("Access-Control-Allow-Origin:*"); // Permite que outras aplicações consumam a api
header("Content-type: application/json"); //Indicação de arquivo JSON

$table = $_GET['table'];

$exibir = Fseletro::getALL($table);

print_r(json_encode($exibir));