<?php
session_start();
require_once "conexao1.php";

$conexao = getConnection();
  
if(isset($_SESSION['logado'])){
    
}
else{
    header("location: loginfront.php");
}

$_SESSION['logado'] = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>

</head>
<body>

<style>
    body {
        background-image: url("imagens/info3.jpg");
        background-size: 100%;
    }

   table {
    margin: auto auto 10px 200px;
    background-color: rgba(255, 255, 255, 0.50);

   }
   
    table, th, td {
      
        border-width: medium;
        border-color: black;
        border-collapse: collapse;
        text-align: center;
        font-family: monospace;
        font-size: 16pt;
        
    }

    th, td {
        padding: 20px 10px;
    }

    h1 {
        margin: 100px auto 10px 200px;
        font-family: monospace;
        text-align: left;
        color: white;
   
    }

    a{
        margin: auto auto 50px 200px;
        color: white;
        font-size: small;
        text-decoration: none;
    }

    a:hover{
    text-decoration: underline;
    color: red;
}

</style>

<h1>Pacientes TecMedical:</h1>

<?php
$result_paciente = "SELECT * FROM info";
$consultar = mysqli_query($conexao, $result_paciente);

echo "<table border = 1>";

echo "<tr id='inicio'>";
    
        echo "<td> ID </td> <td> NOME </td> <td> IDADE </td> <td> PESO </td> <td> ALTURA </td> <td> IMC </td>";
                
echo "</tr>";

while($row_usuario = mysqli_fetch_assoc($consultar)){
    
    $eid = $row_usuario['id'];
    $enome = $row_usuario['nome'];
    $eidade = $row_usuario['idade'];
    $epeso = $row_usuario['peso'];
    $ealtura = $row_usuario['altura'];
    $eimc = $row_usuario['IMC'];
    
    
    echo "<tr>";
    
        echo "<td> $eid </td> <td> $enome </td> <td> $eidade </td> <td> $epeso </td> <td> $ealtura </td> <td> $eimc </td>";
                
echo "</tr>";

}

echo "</table>";

?>

<a href="infofront.php">+ CADASTRAR PACIENTE</a> <br>
<a href="loginfront.php">< SAIR</a>

</body>
</html>
























