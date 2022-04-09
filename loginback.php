<?php
session_start();

require_once "conexao1.php";

$conexao = getConnection();

$user = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$login = mysqli_query($conexao, "SELECT * from cadastrados where user = '$user' AND senha = '$senha'");

if(empty($user) || empty($senha)){
    $_SESSION['msg'] = "Você precisa preencher todos os campos";
    header("Location: loginfront.php");
    exit();
}

if(mysqli_num_rows($login) != 0){
    $_SESSION['logado'] = "";
    header("Location: infofront.php");
}
else{
    $_SESSION['msg'] = "usuario ou senha incorretos";
    header("Location: loginfront.php");
    
}






















?>