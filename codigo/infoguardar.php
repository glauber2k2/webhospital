<?php
session_start();
require_once "conexao1.php";

$conexao = getConnection();

$nomes = $nome = $_POST['nome'];
$idade = $idade = $_POST['idade'];
$altura = $altura = $_POST['altura'];
$peso = $peso = $_POST['peso'];

$IMC = $peso/($altura*$altura);


$stmt = $conexao->prepare("INSERT INTO info (nome, idade, peso, altura, IMC) VALUES (?,?,?,?,?)");

if(!$stmt){
    echo "Erro ao inserir ao banco de dados:" .$conexao->error;
    $conexao->close();
    exit(); 

}

else if(empty($nomes)){
    $conexao->close();
    $_SESSION["logado"] = "&nbsp; >> &nbsp; você precisa preencher o nome.";
    header("Location: infofront.php");
    exit();
}

if(empty($idade)){
    $conexao->close();
    $_SESSION["logado"] = "&nbsp; >> &nbsp; você precisa preencher a idade.";
    header("Location: infofront.php");
    exit();
}

else if(empty($peso)){
    $conexao->close();
    $_SESSION["logado"] = "&nbsp; >> &nbsp; você precisa preencher o peso.";
    header("Location: infofront.php");
    exit();
}

else if(empty($altura)){
    $conexao->close();
    $_SESSION["logado"] = "&nbsp; >> &nbsp; você precisa preencher a altura.";
    header("Location: infofront.php");
    exit();
}

$stmt->bind_param("ssddd", $nomes, $idade, $peso, $altura, $IMC);
$stmt->execute();

$_SESSION["logado"] = "&nbsp; >> &nbsp; dados cadastrados com sucesso!";
header("Location: infofront.php");
?>