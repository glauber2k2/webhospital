<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="home.css">

</head>
<body>

<div id="corpo">

<h1>Cadastro TecMedical</h1>  

<?php
if(isset($_SESSION['msg'])){
    echo "&nbsp;&nbsp; >> &nbsp;" .$_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form method="POST" action="cadastroback.php" onsubmit="return validar()">

<input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="30">
<input type="text" name="user" id="user" placeholder="Crie um usuario" maxlength="20">
<input type="email" name="email" id="email" placeholder="Insira um email valido" maxlength="30">
<input type="email" name="confemail" id="confemail" placeholder="Digite novamente seu email" maxlength="30">
<input type="password" name="senha" id="senha" placeholder="Crie uma senha" maxlength="20">
<input type="password" name="confsenha" id="confemail" placeholder="Repita sua senha" maxlength="20">
<input type="submit" value="Cadastrar">
<a href="loginfront.php">Fazer login</a>
</form>



</div>



<script type="text/javascript" src="validação.js"></script>
</body>
</html>