<?php

    session_start();
    $_SESSION['busca'] = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="paciente.css">
</head>
<body>

<div id=corpo>
<h1>Registrar TecMedical</h1>

<?php
    if(isset($_SESSION['logado'])){
    echo $_SESSION['logado'];
}
else 
{
    header("Location: loginfront.php");
}
?>

<form method="POST" action='infoguardar.php'>
<input type="text" name="nome" placeholder="Digite seu nome" maxlength="20">
<input type="number" name="idade" placeholder="Digite sua idade">
<input type="number" step="0.01" name="peso" placeholder="Digite seu peso" maxlength="5">
<input type="number" step="0.01" name="altura" placeholder="Digite sua altura" maxlength="4">
<input type="submit" value="enviar">
</form>


</div>

<div id=busca>
<form method="POST" action="buscar.php">
    <input type="submit" value="buscar">
</form>
<form action='loginfront.php'>
<input type="submit" value="sair">
</form>

</div>

</body>
</html>