<?php
session_start();
require_once "conexao1.php";

$conexao = getConnection();

$nome = addslashes($_POST['nome']);
$user = addslashes($_POST['user']);
$email = addslashes($_POST['email']);
$confemail = addslashes($_POST['confemail']);
$senha = addslashes($_POST['senha']);
$confsenha = addslashes($_POST['confsenha']);


$stmt = $conexao->prepare("INSERT INTO cadastrados (nome, user, email, senha) VALUES (?,?,?,?)");

if(!$stmt){
    echo "Erro ao inserir ao banco de dados:" .$conexao->error;
    $conexao->close();
    exit(); 

}

$login = mysqli_query($conexao, "SELECT * from cadastrados where user = '$user'");




if(mysqli_num_rows($login) != 0){
    $conexao->close();
    $_SESSION['msg'] = "usuario ja existente";
    header("Location: cadastrofront.php");
}

else if($email != $confemail){
    $conexao->close();
    $_SESSION['msg'] = "verifique os emails e tente novamente!";
    header("Location: cadastrofront.php");
}

else if($senha != $confsenha){
    $conexao->close();
    $_SESSION['msg'] = "verifique as senhas e tente novamente!";
    header("Location: cadastrofront.php");
}

else if(strlen($senha) < 6){
    $conexao->close();
    $_SESSION['msg'] = "coloque uma senha maior que 6 caracteres";
    header("Location: cadastrofront.php");

}

else{
    $_SESSION['msg'] = "conta criada com sucesso!";
    header("Location: loginfront.php");
}


$stmt->bind_param("ssss", $nome, $user, $email, $senha);
$stmt->execute();









$stmt->close();
$conexao->close();  

?>

