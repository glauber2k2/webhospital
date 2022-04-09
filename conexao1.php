<?php


function getConnection(){
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "usuarios";
    $port = "3306";

$conexao = new mysqli($servername, $user, $password, $dbname, $port);

if($conexao->connect_error)
{
    die("Não foi possivel conectar ao banco");
}

    return $conexao;




}

?>