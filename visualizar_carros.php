<?php
session_start();


// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'portaria') {
    header('Location: cadastro_alunos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estacionamento FATEC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;}
    </style>
</head>
<body>

    
    <center>            
    
        <h1>Lista de carros cadastrados</h1>
        <a href="dashboard.php"><input type="submit" value="Voltar"></a>
        <br><br>
        <a href="carro.txt"></a>
        <?php 
        $handle = fopen("carro.txt", "r");
        while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
        }
        fclose($handle);
        ?>
    <br><br>    
   
    </center>

</body>
</html>