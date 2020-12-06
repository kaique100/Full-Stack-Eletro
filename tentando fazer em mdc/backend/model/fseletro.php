<?php

require "Connection.php";

class Fseletro 
{
    public $produtos;
    public $pedidos;
    public $contato;

    public static function getAll($table)
    {
        $con = Connection::getDb();
        $stmt = $con->query("select * from $table;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);          
    }

    public static function ultimoPedido()
    {
        $con = Connection::getDb();
        $stmt = $con->query("SELECT * from $table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}