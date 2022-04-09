<?php

session_start();
unset($_SESSION['logado']);
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
<h1>Login TecMedical</h1>
 
<?php
if(isset($_SESSION['msg'])){
    echo "&nbsp;&nbsp; >> &nbsp;" .$_SESSION['msg'];
    unset($_SESSION['msg']);
}
?> 

<form method="POST" action="loginback.php">

<input type="user" name="user" placeholder="Insira seu usuario" maxlength="20">
<input type="password" name="senha" placeholder="Insira sua senha" maxlength="20">
<input type="submit" value="Entrar">
<a href="cadastrofront.php">Cadastrar-se </a>




</form>
</div>

<p id="creditos">Created by: @glauber.sm</p>

</body>
</html>